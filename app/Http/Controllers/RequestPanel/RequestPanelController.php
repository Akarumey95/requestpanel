<?php

namespace App\Http\Controllers\RequestPanel;

use App\Http\Controllers\Controller;
use RequestPanel\Http\Controllers\RequestPanel\RequestPanel;

class RequestPanelController extends Controller
{
    public function index()
    {
        return (new RequestPanel)->index();
    }
}
