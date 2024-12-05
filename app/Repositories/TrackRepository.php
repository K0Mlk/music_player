<?php

namespace App\Repositories;

use App\Models\Track;

class TrackRepository
{
    public function getAll()
    {
        return Track::all();
    }
}
