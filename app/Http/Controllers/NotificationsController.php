<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;

class NotificationsController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $notifications = $user->notifications()->paginate(10); // Ganti paginate(10) dengan sesuai kebutuhan
        return view('user.profile', compact('notifications', 'user'));
    }

    public function destroyAll()
    {
        $user = auth()->user(); // Mendapatkan pengguna saat ini
        $user->notifications()->delete(); // Menghapus semua notifikasi yang terkait dengan pengguna
        return redirect()->back()->with('success', 'All notifications have been deleted.');
    }

    public function destroy(Notification $notification)
    {
        $notification->delete();
        return back();
    }
}
