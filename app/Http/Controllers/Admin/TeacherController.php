<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Teacher\BasicInfomationService;

class TeacherController extends Controller
{
    //
    public function index(){
        $basicInfomationService = new BasicInfomationService;
        return view('admin.teacher',['basicinfo'=>$basicInfomationService->read()]);
    }
    public function updatePhone(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!$request->has('phone')){
            return response(403);
        }

        $basicInfoService->update('phone',$request->phone);

        return response(200);
    }
}
