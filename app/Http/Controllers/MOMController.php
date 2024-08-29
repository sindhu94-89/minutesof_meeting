<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createMOMRequest;
use App\Models\MOMModel;
use App\Models\minutesofmeeting;
use Auth;


class MOMController extends Controller
{
    protected $MOMModel;
    public function __construct(MOMModel $MOMModel){
        $this->MOMModel = $MOMModel;
    }
    public function dashboard(){
        $result = $this->MOMModel->getMOM();
        return view('mom.dashboard')->with('result',$result);
    }
    public function createMom(){
        return view('mom.createMom');

    }
    public function createMomPost(createMOMRequest $request){
        $validated = $request->validated();
        $result = $this->MOMModel->createPost($request->all());
        if($result['status_code']==200){
            return redirect('/mom/dashboard');
        }
        //return view('mom.createMom')->with(['result' => $result]);
    }
    public function editMOM($id){
        $result = $this->MOMModel->updateMOM($id);
        return view('mom.updateMOM')->with(['result' => $result]);
        
    }
    public function updateMOM(createMOMRequest $request){
        $validated = $request->validated();
        $result = $this->MOMModel->updateMOMPost($request);
        /*if($result['status_code']==200){*/
            return redirect('/mom/dashboard');
        /*}*/
    }
    public function deleteMOM($id){
        $result = $this->MOMModel->deleteactionMOM($id);
        return redirect('/mom/dashboard');

    }
}
