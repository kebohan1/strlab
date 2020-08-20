<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Teacher\BasicInfomationService;

class TeacherController extends Controller
{
    //
    public function index(){
        $basicInfoService = new BasicInfomationService;
        return view('teacher',$basicInfoService->read());
    }

    
}
