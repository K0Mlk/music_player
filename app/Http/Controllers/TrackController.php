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

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $this->trackService->uploadTrackOrTracks($file);

        return redirect()->back()->with('success', 'Звучок на базе!');
    }
}
