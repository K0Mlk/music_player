<?php

namespace App\Services;

use App\Repositories\TrackRepository;

class TrackService
{
    protected $trackRepository;

    public function __construct(TrackRepository $trackRepository)
    {
        $this->trackRepository = $trackRepository;
    }

    public function getAllTracks()
    {
        return $this->trackRepository->getAll();
    }
}
