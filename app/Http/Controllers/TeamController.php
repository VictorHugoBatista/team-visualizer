<?php

namespace App\Http\Controllers;

use App\Http\Resources\Team as TeamResource;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $teams->load('users');
        return TeamResource::collection($teams);
    }
}
