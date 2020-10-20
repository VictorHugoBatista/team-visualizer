<?php

namespace App\Http\Controllers;

use App\Http\Resources\Team as TeamResource;
use App\Models\AdminUsers;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('users.media')->get();
        return TeamResource::collection($teams);
    }
}
