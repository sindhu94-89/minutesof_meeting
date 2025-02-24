<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createMOMRequest;
use App\Models\MOMModel;
use App\Models\minutesofmeeting;
use Auth;
use Carbon\Carbon;
use Carbon\CarbonPeriod;


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
        $startPeriod = Carbon::parse('9:00');
        $endPeriod   = Carbon::parse('18:00');
         
        $period = CarbonPeriod::create($startPeriod, '1 hour', $endPeriod);
        $hours  = [];
         
        foreach ($period as $date) {
            $hours[] = $date->format('H:i');
        }
        return view('mom.createMom',['hours'=>$hours]);

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
