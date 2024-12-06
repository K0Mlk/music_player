<?php

namespace App\Services;

use App\Repositories\TrackRepository;
use Illuminate\Container\Attributes\Storage;
use getID3;

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

    public function uploadTrackOrTracks($file)
    {


        if (!$file->isValid()) {

            throw new \Exception('Чет не грузит: ' . $file->getErrorMessage());
        }

        $file_path = $file->store('tracks', 'public');

        $getID3 = new getID3();
        $file_info = $getID3->analyze($file->getRealPath());
        // dd($file_path);
        $title = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $duration = isset($file_info['playtime_seconds']) ? (int)$file_info['playtime_seconds'] : 0;
        $artist = isset($file_info['tags']['id3v2']['artist'][0]) ? $file_info['tags']['id3v2']['artist'][0] : 'Unknown Artist';

        $data = [
            'title' => $title,
            'artist' => $artist,
            'duration' => $duration,
            'file_path' => $file_path,
        ];
        // dd($data);
        $this->trackRepository->upload($data);
    }
}
