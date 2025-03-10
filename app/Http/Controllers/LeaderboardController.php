<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller
{
    //
    public function index(Request $request) {

        $query = User::byRank();

        if ($request->has('filter')) {
            $filter = $request->input('filter');
            $query->whereHas('activities', function ($q) use ($filter) {
                if ($filter === User::DAY) {
                    $q->byDate();
                } elseif ($filter === User::MONTH) {
                    $q->byMonth();
                } elseif ($filter === User::YEAR) {
                    $q->byYear();
                }
            });
        }

        if ($request->has('activity_type')) {
            $activityType = $request->input('activity_type');
            $query->whereHas('activities', function ($q) use ($activityType) {
                $q->byType($activityType);
            });
        }

        return view('leaderboard', ['users' => $query->get()]);
    }

    public function search(Request $request) {
        $user = User::where('id', $request->input('user_id'))->first();
        return view('leaderboard', ['user' => $user]);
    }

    public function recalculate() {
        \Artisan::call('app:update-leader-board');
        return redirect()->route('leaderboard.index');
    }
}
