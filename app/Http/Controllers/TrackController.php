<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TrackService;


class TrackController extends Controller
{
    protected $trackService;

    public function __construct(TrackService $trackService)
    {
        $this->trackService = $trackService;
    }
    public function index()
    {
        $tracks = $this->trackService->getAllTracks();

        return view('home', ['tracks' => $tracks]);
    }
}
