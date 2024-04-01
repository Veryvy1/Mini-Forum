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
        $notifications = $user->notifications()->paginate(10); // Change paginate(10) as needed
        return view('user.profile', compact('notifications', 'user'));
    }

    public function destroyAll(Request $request)
    {
        $user = $request->user(); // Get the current user
        $user->notifications()->delete(); // Delete all notifications related to the user
        return redirect()->back()->with('success', 'All notifications have been deleted.');
    }

    public function destroy(Notification $notification)
    {
        $notification->delete(); // Delete a specific notification
        return back();
    }
}
