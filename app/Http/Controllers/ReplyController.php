<?php

namespace App\Http\Controllers;
use App\Models\Reply;
use App\Models\Notification;
use App\Models\Comment;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ReplyRequest;
use DOMDocument;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function replyId(Request $request, $id)
    {
        $user = auth()->user();
        $comment = Comment::findOrFail($id);
        $reply = Reply::where('comment_id', $id)->orderBy('created_at', 'desc')->get();
        $replyAll = Reply::where('comment_id', $id)->count();
        $profil = User::find($user->id)->profil; // Pastikan profil memiliki nilai
        $notifications = $this->getNotifications();
        $notificationCount = $notifications->count();

        return view('user.reply', compact('comment', 'user', 'reply', 'replyAll', 'profil', 'notifications', 'notificationCount'));
    }

    private function getNotifications()
    {
        // Mengambil notifikasi like dan komentar terbaru untuk konten pengguna saat ini
        $userNotifications = Notification::select('notifications.*')
            ->join('contents', 'notifications.content_id', '=', 'contents.id')
            ->where('contents.user_id', Auth::id())
            ->whereIn('notifications.type', ['like', 'comment'])
            ->orderBy('notifications.created_at', 'desc')
            ->get();

        // Mengambil notifikasi balasan (reply) terbaru yang merupakan balasan untuk komentar pada konten pengguna saat ini
        $replyNotifications = Notification::select('notifications.*')
            ->join('comments', 'notifications.comment_id', '=', 'comments.id')
            ->join('contents', 'comments.content_id', '=', 'contents.id')
            ->where(function ($query) {
                $query->where('comments.user_id', Auth::id()) // Memfilter balasan yang dikirim oleh pengguna saat ini
                    ->orWhere('contents.user_id', Auth::id()); // Menambahkan filter untuk pemilik konten dari konten yang dikomentari
            })
            ->where('notifications.type', 'reply')
            ->orderBy('notifications.created_at', 'desc')
            ->get();

        // Menggabungkan notifikasi ke dalam satu koleksi
        $notifications = $userNotifications->merge($replyNotifications);

        // Mengurutkan notifikasi berdasarkan waktu pembuatan
        $notifications = $notifications->sortByDesc('created_at');

        return $notifications;
    }


    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(ReplyRequest $request, $replyId)
{
    try {
        $user_id = auth()->id();

        $reply = $request->reply;
        $dom = new DOMDocument();
        $dom->loadHTML($reply, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = "/uploads" . time() . $k . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $reply = $dom->saveHTML();

        $commentModel = Comment::find($replyId);
        if (!$commentModel) {
            return redirect()->back()->withErrors(['error' => 'Comment not found']);
        }

        // Mencari komentar yang akan dibalas (reply)
        $commentModel = Comment::find($replyId);
        if (!$commentModel) {
            return redirect()->back()->withErrors(['error' => 'Comment not found']);
        }

        // Mendapatkan ID konten terkait dari komentar
        $contentId = $commentModel->content_id;
        $content = Content::find($contentId);

            Notification::create([
                'content_id' => $contentId,
                'user_id' => $user_id,
                'type' => 'reply',
                'comment_id' => $replyId,
            ]);

        // Menyimpan balasan (reply) ke dalam database
        $replyModel = new Reply();
        $replyModel->reply = $reply;
        $replyModel->comment_id = $replyId;
        $replyModel->user_id = $user_id;
        $replyModel->save();

        return redirect()->back()->with('success', 'Successful reply');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }
}


    // public function store(ReplyRequest $request, $replyId)
    // {
    //     try {
    //         $user_id = auth()->id();

    //         $reply = $request->reply;
    //         $dom = new DOMDocument();
    //         $dom->loadHTML($reply, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

    //         $images = $dom->getElementsByTagName('img');

    //         foreach ($images as $k => $img) {
    //             $data = $img->getAttribute('src');
    //             list($type, $data) = explode(';', $data);
    //             list(, $data) = explode(',', $data);
    //             $data = base64_decode($data);
    //             $image_name = "/uploads" . time() . $k . '.png';
    //             $path = public_path() . $image_name;
    //             file_put_contents($path, $data);
    //             $img->removeAttribute('src');
    //             $img->setAttribute('src', $image_name);
    //         }
    //         $reply = $dom->saveHTML();

    //         $commentModel = Comment::find($replyId);
    //         if (!$commentModel) {
    //             return redirect()->back()->withErrors(['error' => 'Comment not found']);
    //         }

    //         $contentId = $commentModel->content_id;
    //         $content = Content::find($contentId);

    //         if ($content && $content->user_id !== $user_id) {
    //             Notification::create([
    //                 'content_id' => $contentId,
    //                 'user_id' => $user_id,
    //                 'type' => 'reply',
    //             ]);
    //         }

    //         $replyModel = new Reply();
    //         $replyModel->reply = $reply;
    //         $replyModel->comment_id = $replyId;
    //         $replyModel->user_id = $user_id;
    //         $replyModel->save();

    //         return redirect()->back()->with('success', 'Successful reply');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
    //     }
    // }



    public function show($id) {
        $comment = Comment::find($id);
        $reply = Reply::where('comment_id', $id)->get();
        $replyAll = $reply->count();

        return view('user.reply', compact('comment', 'reply', 'replyAll'));
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Request $request)
    {
    $id = $request->reply;
    $reply = Reply::findOrFail($id);

    $dom = new DOMDocument();
    $dom->loadHTML($reply->reply, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    $images = $dom->getElementsByTagName('img');
    foreach ($images as $img) {
        $imagePath = public_path() . $img->getAttribute('src');
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    $reply->delete();

    return redirect()->back()->with('success', 'Reply successfully deleted');
    }

}
