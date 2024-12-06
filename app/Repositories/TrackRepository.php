<?php

namespace App\Repositories;

use App\Models\Track;

class TrackRepository
{
    public function getAll()
    {
        return Track::all();
    }

    public function upload(array $data)
    {
        // dd($data);
        return Track::create($data);
    }
}
