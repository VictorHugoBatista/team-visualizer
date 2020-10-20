<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeamCollection;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        return new TeamCollection(Team::all());
    }
}
