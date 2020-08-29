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

        return view('admin.teacher',$basicInfomationService->read());
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
        // // return $request->skills[0]['skill'];
        if(!$request->has('skills')){
            return response(403);
        }

        $feedback = $basicInfoService->updateSkill($request->skills);
        // return response()->json($feedback['code']);
        return response()->json($feedback);
    }

    public function updateEducation(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!$request->has('educations')){
            return response(403);
        }
        // return $request->educations;
        $feedback = $basicInfoService->updateEducation($request->educations);

        return response()->json($feedback);

    }

    public function createExperience(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!(($request->has('department')&&$request->has('job')))){
            return back()->with('error','No Infomation');
        }

        $result = $basicInfoService->createExperience($request->department,$request->job);

        if($result['code']==400){
            return back()->with('error',$result['message']);
        } else {
            return back()->with('success');
        }


    }

    public function createCounter(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!(($request->has('name')&&$request->has('count')))){
            return back()->with('error','No Infomation');
        }

        $result = $basicInfoService->createCounter($request->name,$request->count);

        if($result['code']==400){
            return back()->with('error',$result['message']);
        } else {
            return back()->with('success');
        }
    }

    public function createArticle(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!(($request->has('author')&&$request->has('title')&&$request->has('journal')&&$request->has('time')&&$request->has('citation_index')))){
            return back()->with('error','No Infomation');
        }

        $result = $basicInfoService->createArticle($request->author,$request->title,$request->journal,$request->time,$request->citation_index);


        if($result['code']==400){
            return back()->with('error',$result['message']);
        } else {
            return back()->with('success');
        }
    }

    public function createSpeeding(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!(($request->has('author')&&$request->has('title')&&$request->has('journal')&&$request->has('time')&&$request->has('citation_index')))){
            return back()->with('error','No Infomation');
        }

        $result = $basicInfoService->createSpeeding($request->author,$request->title,$request->journal,$request->time,$request->citation_index);


        if($result['code']==400){
            return back()->with('error',$result['message']);
        } else {
            return back()->with('success');
        }
    }

    public function createMost(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!(($request->has('name')&&$request->has('start_date')&&$request->has('end_date')&&$request->has('project_number')&&$request->has('job')))){
            return back()->with('error','No Infomation');
        }

        $result = $basicInfoService->createMostProject($request->name,$request->start_date,$request->end_date,$request->project_number,$request->job);


        if($result['code']==400){
            return back()->with('error',$result['message']);
        } else {
            return back()->with('success');
        }
    }

    public function createPatent(Request $request){
        $basicInfoService = new BasicInfomationService;
        if(!(($request->has('name')&&$request->has('category')&&$request->has('patent_number')&&$request->has('start_date')&&$request->has('end_date')))){
            return back()->with('error','No Infomation');
        }

        $result = $basicInfoService->createMostProject($request->name,$request->category,$request->patent_number,$request->start_date,$request->end_date);


        if($result['code']==400){
            return back()->with('error',$result['message']);
        } else {
            return back()->with('success');
        }
    }
}
