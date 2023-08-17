<?php

namespace App\Http\Controllers;

use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Events\PusherBroadcast;

class PusherController extends Controller
{
    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('index');
    }

    /**
     * @param $request
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function broadcast($request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('broadcast', ['message' => $request->get('message')]);
    }

    /**
     * @param $request
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function receive($request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('receive', ['message' => $request->get('message')]);
    }
}
