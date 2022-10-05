<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        abort_if(Gate::denies('admin-access'), Response::HTTP_FORBIDDEN, 'WSTĘP WZBRONIONY');
        return view('admin.dashboard');
    }
}
