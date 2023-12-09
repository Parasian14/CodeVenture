<?php

namespace App\Http\Controllers;

use App\Models\LearningPath;
use App\Models\User;
use Illuminate\Http\Request;

class UsersLpsController extends Controller
{
    public function sync($user_id, string $lp_id)
    {
        $lp = LearningPath::find($lp_id);
        $user = User::find($user_id);
        
    }
}