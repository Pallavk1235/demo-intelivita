<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Activity;

class UpdateLeaderBoard extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-leader-board';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is commad for update user rank based on point';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $users = User::with('activities')->get();

        foreach ($users as $user) {
            $user->total_points = $user->activities()->sum('points');
            $user->save();
        }

        $rankedUsers = User::orderByDesc('total_points')->get();
        $rank = 1;
        $previousPoints = null;

        foreach ($rankedUsers as $index => $user) {
            if ($previousPoints !== null && $previousPoints !== $user->total_points) {
                $rank = $index + 1;
            }
            $user->rank = $rank;
            $user->save();
            $previousPoints = $user->total_points;
        }

        $this->info('Leaderboard updated successfully!');
    }
}
