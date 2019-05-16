<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Properties;
use App\TenantApplicant;
use App\User;

class TenantsController extends Controller
{
    //
    public function index(){
        if(session('userId')!= null){
            return view('tenant.index');
        }
        
    }
    public function availableProperties(){
        $result = Properties::all();
        return view('tenant.availableProperties')->with('results',$result);
    }
    public function payRent(){
        return view('tenant.payRent');
    }
    public function myProfile(){
        $user = User::all()
                    ->where('id',session('userId'));
        return view('tenant.myProfile')->with('result',$user);
       
    }
    public function requestMaintenance(){
        return view('tenant.requestMaintenance');
    }
    public function applyProperties($id){
        
        
        $result = Properties::all()
                            ->where('id',$id);
                           // dd($id);
        $result2 = TenantApplicant::where([
                                        ['property_id',$id],
                                        ['apply_status',1],
                                        ['tenant_id',session('userId')]
                                    ])
                                    ->get();
        //dd($result2);
        $btn =0;
        if(count($result2)>0){
            foreach($result2 as $item)
               {
                    $btn =1;
               } 
        }
        return view('tenant.applyToProperty')->with(array('result'=>$result,'btn'=>$btn));
    }
    public function apply($ownerId,$tenantId,$propertyId){
        date_default_timezone_set('Canada/Central');
        $time = now();
        $result = Properties::all();
        $applicant = new TenantApplicant;
        $applicant->property_id = $propertyId;
        $applicant->tenant_id = $tenantId;
        $applicant->owner_id = $ownerId;
        $applicant->status = 0;
        $applicant->apply_status = 1;
        $applicant->save();
        return redirect('/tenant/available-property');
        return view('tenant.availableProperties')->with('results',$result);
    }
}
