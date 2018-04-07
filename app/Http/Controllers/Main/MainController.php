<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 *--------------------------------------------------------------------------
 * CityController Controller
 *--------------------------------------------------------------------------
 *
 * This controller handle all City requests
 *
 * @author Mark Tao(taoqiping@carnetmotor.com)
 *
 */
class MainController extends Controller
{
    /**
     * [find Province]
     *
     * @return [json] [Province]
     */
    public function index()
    {
        return view('main.index');
    }
}
