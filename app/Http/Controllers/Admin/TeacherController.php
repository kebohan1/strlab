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

    public function updateOffice(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!$request->has('office')){
            return response(403);
        }

        $basicInfoService->update('office',$request->office);

        return response(200);
    }

    public function updateEmail(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!$request->has('email')){
            return response(403);
        }

        $basicInfoService->update('email',$request->email);

        return response(200);
    }

    public function updateSkill(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!$request->has('skills')){
            return response(403);
        }

        $basicInfoService->updateSkill($request->skills);

        return response(200);
    }

    public function updateEducation(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!$request->has('education')){
            return response(403);
        }

        $basicInfoService->updateSkill($request->education);

        return response(200);
    }
}
