<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properties;
use App\TenantApplicant;
use App\User;
use Illuminate\Support\Facades\DB;
class OwnersController extends Controller
{
    public function index(){
        if(session('userId')!= null){
            return view('owner.index');
        }
        
    }
    public function viewProperty(){
        $result = Properties::all()
                            ->where('user_id',session('userId'));
        //return ($result);
        if(session('type')=='1'){
            return view('Owner.viewProperty')->with('results',$result);
        }else{
            return redirect('/');
        }
    }
    public function addPropertyForm(){
        return view('Owner.addProperty');
    }
    public function addProperty(Request $request){
       // $request->property;
        //return ($request->property);
        
       // dd($request);
       if($request->hasFile('imageUpload')){
            $fileName = $request->imageUpload->getClientOriginalName();
            //$destinationPath = public_path('/uploads');
            $request->imageUpload->storeAs('public/uploads',$fileName);

            $property = new Properties;
            $property->user_id = session('userId');
            $property->property_type=$request->property;
            $property->street_number=$request->streetnumber;
            $property->street_name=$request->streetname;
            $property->address2=$request->address2;
            $property->city=$request->city;
            $property->state=$request->state;
            $property->zip_code=$request->zip;
            $property->rent=$request->rent;
            $property->img=$fileName;
            $property->save();

            return redirect('/viewProperty');
        }
    
    }
    public function maintenance(){
        return view('Owner.maintenance');
    }
    public function payments(){
        return view('Owner.payments');
    }
    public function expenses(){
        return view('Owner.expenses');
    }
    public function myProfile(){
        $user = User::all()
                        ->where('id',session('userId'));
        return view('owner.myProfile')->with('result',$user);
    }
    public function applicantAccept(Request $request){
        
        //dd($request);
        $result = TenantApplicant::where([
                                            ['tenant_id',$request->tenantId],
                                            ['property_id',$request->propertyId],
                                        ])
                                    ->update(['status'=>1]);
        
        $result1 = TenantApplicant::all()
                                ->where('owner_id',session('userId'));
        
        $testingAll = array();
        if(count($result1)>0)
        {
            $testing = DB::select('SELECT * FROM tenant_applicants 
            INNER JOIN users ON users.id = tenant_applicants.tenant_id
            INNER JOIN properties ON tenant_applicants.property_id = properties.id
            where tenant_applicants.owner_id = ' .session('userId').' AND tenant_applicants.status=0');
            
        }
        

        //return view("owner.applicant")->with('result1',$testingAll);
        return redirect()->route('applicant',['result1'=>$testingAll]);
    }
    public function applicant(){
        // $result = TenantApplicant::all()
        //                         ->where('owner_id',session('userId'));
        // //dd($result);
        // $counter=0;
        // $testingAll = array();
        
        // if(count($result)>0)
        // {
            
        //     foreach($result as $item){
        //         //dd($item);
        //         $testing = DB::select('SELECT * FROM users
        //         INNER JOIN tenant_applicants ON users.id = tenant_applicants.owner_id
        //         INNER JOIN properties ON tenant_applicants.property_id = properties.id
        //         WHERE users.id = '.$item->tenant->id.' And tenant_applicants.status=0');
                
                
        //         array_push($testingAll,$testing);
                

                
        //         $counter++;
        //     }

        //     //1 - 1
        //     //2 - 2
        //     //3 - 2
        //     //4 - 1

        // }
        // dd($testingAll);
        // return view('welcome', compact('name', 'date'));
        //return ($value_holder2);
       //return view('Owner.applicant','value_holder');
        $testing = DB::select('SELECT * FROM tenant_applicants 
        INNER JOIN users ON users.id = tenant_applicants.tenant_id
        INNER JOIN properties ON tenant_applicants.property_id = properties.id
        where tenant_applicants.owner_id = ' .session('userId').' AND tenant_applicants.status=0');
        
       // dd($testing);
         return view('Owner.applicant')->with('result1',$testing);
    }
}
