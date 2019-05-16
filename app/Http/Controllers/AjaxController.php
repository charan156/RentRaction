<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\chatting;
use App\login_details;
use App\User;
class AjaxController extends Controller
{

    public function index(Request $request){
        date_default_timezone_set('Canada/Central');
        // $result = User::all()
        //          ->where('id','!=',$request->userId); 
        //var_dump($request->userId);
        //return $request->userId;
        $result;
        if(session('type')==1){
        $result = DB::select('SELECT DISTINCT firstName,lastName,tenant_id,owner_id,username FROM users
        INNER JOIN tenant_applicants on users.id = tenant_applicants.tenant_id where tenant_applicants.owner_id = '.$request->userId.' AND tenant_applicants.status = 1 ');
        //dd($result);
        //return view('loginAndRegistration.index');
       $output = '
       <table class="table table-bordered table-striped">
           <tr>
               <th width="70%">Username</td>
               <th width="20%">Status</td>
               <th width="10%">Action</td>
           </tr>
       ';
       
       //return response()->json($result); 

       foreach($result as $row)
       {   
           //dd($row->tenant_id);
          // return response()->json($row['id']); 
           $status = '';
           $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
           $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
           $is_type = $this->fetch_user_last_activity($row->tenant_id);
        //    dd($is_type);
           if($is_type == 'yes')
           {
               $status = '<span class="label label-success">Online</span>';
           }
           else
           {
               $status = '<span class="label label-danger">Offline</span>';
           }
////--------------- Important for showing unseen msg ---------------/////////
            //$test = $this->count_unseen_message($row->id, $request->userId);
           //$test2 = $this->fetch_is_type_status($row->id);
           $output .= '
           <tr>
               <td>'.$row->firstName.' '.$row->lastName.'</td>
               <td>'.$status.'</td>
               <td><button type="button" class="btn btn-info btn-xs start_chat"  data-touserid="'.$row->tenant_id.'" data-tousername="'.$row->username.'">Start Chat</button></td>
           </tr>
           ';
          
       }
       
        // dd($output);
       $output .= '</table>';

       //echo $output;
       return response()->json($output);   
        }


        if(session('type')==2){
          // dd(session('type'));
        $result = DB::select('SELECT * FROM users
        INNER JOIN tenant_applicants on users.id = tenant_applicants.owner_id where tenant_applicants.tenant_id = '.$request->userId.' AND tenant_applicants.status = 1 ');
        //dd($result);
        //return view('loginAndRegistration.index');
       $output = '
       <table class="table table-bordered table-striped">
           <tr>
               <th width="70%">Username</td>
               <th width="20%">Status</td>
               <th width="10%">Action</td>
           </tr>
       ';
       
       //return response()->json($result); 

       foreach($result as $row)
       {   
           //dd($row->tenant_id);
          // return response()->json($row['id']); 
           $status = '';
           $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
           $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
           $is_type = $this->fetch_user_last_activity($row->owner_id);
           //dd($is_type);
           if($is_type == 'yes')
           {
               $status = '<span class="label label-success">Online</span>';
           }
           else
           {
               $status = '<span class="label label-danger">Offline</span>';
           }

           $test = $this->count_unseen_message($row->owner_id, $request->userId);
           $test2 = $this->fetch_is_type_status($row->owner_id);
           $output .= '
           <tr>
               <td>'.$row->firstName.' '.$row->lastName.'</td>
               <td>'.$status.'</td>
               <td><button type="button" class="btn btn-info btn-xs start_chat"  data-touserid="'.$row->owner_id.'" data-tousername="'.$row->username.'">Start Chat</button></td>
           </tr>
           ';
          
       }


       $output .= '</table>';

       //echo $output;
       return response()->json($output);   
        }
      
        
    }


    function fetch_user_last_activity($user_id)
    {
        //return $user_id;
        $result = login_details::all()
                                ->where('user_id',$user_id);
                               // ->orderBy('last_activity','DESC')
                                //->get();
        
        foreach($result as $row)
        {
            return $row['is_type'];
        }
        //return $user_id;
    }

    public function fetch_user_chat_history(Request $request)
    {
       // return response()->json($request->to_user_id);
        //$from_user_id, $to_user_id
        $result = chatting::where([
                                ['to_user_id','=', $request->to_user_id],
                                ['from_user_id','=', $request->from_user_id]
                                ])
                            ->orwhere([
                                        ['from_user_id',$request->to_user_id],
                                        ['to_user_id',$request->from_user_id]
                                   ])   
                            //->orderBy('timestamp','desc')
                            ->get();
        $output = '<ul class="list-unstyled">';
       // dd($result);
        
        foreach($result as $row)
        {
           // dd($row["from_user_id"]);
            $user_name = '';
            if($row["from_user_id"] == $request->from_user_id)
            {
                $user_name = '<b class="text-success">You</b>';
            }
            else
            {
                $test = $this->get_user_name($row['from_user_id']);
                $user_name = '<b class="text-danger">'.$test.'</b>';
            }
            $output .= '
            <li style="border-bottom:1px dotted #ccc">
                <p>'.$user_name.' - '.$row["chat_message"].'
                    <div align="right">
                        - <small><em>'.$row['timestamp'].'</em></small>
                    </div>
                </p>
            </li>
            ';
        }
        $output .= '</ul>';
        $result2 = DB::update("update chattings set status = 0 where from_user_id ='$request->to_user_id' and to_user_id
                            ='$request->from_user_id' and status = 1");
      /*  $result2 = chatting::where([
                                    ['from_user_id',$request->to_user_id],
                                    ['to_user_id', $request->from_user_id],
                                    ['status',1]
                                ])
                                ->update(['status'=> 0]);
*/
       /* $query = "
        UPDATE chat_message 
        SET status = '0' 
        WHERE from_user_id = '".$to_user_id."' 
        AND to_user_id = '".$from_user_id."' 
        AND status = '1'
        ";
        $statement = $connect->prepare($query);
        $statement->execute();*/

         //$output;
         return response()->json($output);
    }

    function get_user_name($user_id)
    {
        //$query = "SELECT username FROM login WHERE user_id = '$user_id'";
        $result = user::select('username')
                        ->where(['user_id',$user_id]);

        foreach($result as $row)
        {
            return $row['username'];
        }
    }

    function count_unseen_message($from_user_id, $to_user_id)
    {
       // return $to_user_id;
        return response()->json($from_user_id); 
        $result = chatting::all()
                            ->where([
                                ['from_user_id',$from_user_id],
                                ['to_user_id',$to_user_id],
                                ['status',1]
                            ]);

        $output = '';
        if($result > 0)
        {
            $output = '<span class="label label-success">'.$result.'</span>';
        }
        return $output;
    }

    function fetch_is_type_status($user_id)
    {
        $result = login_details::select('is_type')
                                ->where('user_id',$user_id);
        
        $query = "
        SELECT is_type FROM login_details 
        WHERE user_id = '".$user_id."' 
        ORDER BY last_activity DESC 
        LIMIT 1
        ";	
  
        $output = '';
        foreach($result as $row)
        {
            if($row["is_type"] == 'yes')
            {
                $output = ' - <small><em><span class="text-muted">Typing...</span></em></small>';
            }
        }
        return $output;
    }

    function fetch_group_chat_history()
    {
        $query = "
        SELECT * FROM chat_message 
        WHERE to_user_id = '0'  
        ORDER BY timestamp DESC
        ";

        $statement = $connect->prepare($query);

        $statement->execute();

        $result = $statement->fetchAll();

        $output = '<ul class="list-unstyled">';
        foreach($result as $row)
        {
            $user_name = '';
            if($row["from_user_id"] == $_SESSION["user_id"])
            {
                $user_name = '<b class="text-success">You</b>';
            }
            else
            {
                $user_name = '<b class="text-danger">'.get_user_name($row['from_user_id'], $connect).'</b>';
            }

            $output .= '

            <li style="border-bottom:1px dotted #ccc">
                <p>'.$user_name.' - '.$row['chat_message'].' 
                    <div align="right">
                        - <small><em>'.$row['timestamp'].'</em></small>
                    </div>
                </p>
            </li>
            ';
        }
        $output .= '</ul>';
        return $output;
    }
    public function updateLastActivity(Request $request){
        date_default_timezone_set('Canada/Central');
        $time = now();
        return response()->json($request->userId);
        $result = DB::update("update login_details set last_activity ='$time' where user_id ='$request->userId'");
        /*$result = login_details::where([
                                  ['user_id',$request->userId]  
                                ])
                                ->update(['last_activity'=>now()]);
        */
    }
    public function update_is_type_status(Request $request){
        date_default_timezone_set('Canada/Central');
       // $result = DB::update("update login_details set is_type ='$request->is_type' where user_id ='$request->from_user_id'");
    
    }
    public function insert_chat(Request $request){
        
       // return response()->json("test");
       /* $data = array(
            ':to_user_id'		=>	$request->to_user_id,
            ':from_user_id'		=>	$request->from_user_id,
            ':chat_message'		=>	$request->chat_message,
            ':status'			=>	'1'
        );*/
        
        $result = DB::insert("insert INTO chattings (to_user_id, from_user_id, chat_message, status) 
                            VALUES ('$request->to_user_id', '$request->from_user_id', '$request->chat_message', '1')");
       /* $query = "
        INSERT INTO chat_message 
        (to_user_id, from_user_id, chat_message, status) 
        VALUES (:to_user_id, :from_user_id, :chat_message, :status)
        ";
        
        $statement = $connect->prepare($query);
        */
        //return response()->json("test");
        if($result>0)
        {   //return response()->json("test");
            $output=$this->fetch_user_chat_history_for_insert($request->to_user_id, $request->from_user_id);
            return response()->json($output);
        }
    }

    function fetch_user_chat_history_for_insert($to_user_id, $from_user_id)
    {  /// return "hhhhh";
        ///return response()->json($request->to_user_id);
        //$from_user_id, $to_user_id
       // $result = chatting::all();
                                   //->get()  
                            //->orderBy('timestamp','desc');
        //$result = DB::select("select * from chattings where (from_user_id= '3' AND to_user_id = '4'))");
        $result = chatting::where([
                            ['to_user_id','=', $to_user_id],
                            ['from_user_id','=', $from_user_id],
                            ])
                        ->orwhere([
                                    ['from_user_id',$to_user_id],
                                    ['to_user_id',$from_user_id],
                            ])
                            ->get();
                            //->orderBy('timestamp','desc')
                            
        $output = '<ul class="list-unstyled">';
                                
       
        foreach($result as $row)
        {
            //return $row['chat_message'];
            $user_name = '';
            if($row["from_user_id"] == $from_user_id)
            {
                $user_name = '<b class="text-success">You</b>';
            }
            else
            {
                $test = $this->get_user_name($row['from_user_id']);
                $user_name = '<b class="text-danger">'.$test.'</b>';
            }
            $output .= '
            <li style="border-bottom:1px dotted #ccc">
                <p>'.$user_name.' - '.$row["chat_message"].'
                    <div align="right">
                        - <small><em>'.$row['timestamp'].'</em></small>
                    </div>
                </p>
            </li>
            ';
        }
        $output .= '</ul>';
        return $output;
        $result2 = chatting::where([
                                    ['from_user_id',$to_user_id],
                                    ['to_user_id', $from_user_id],
                                    ['status',1]
                                ])
                                ->update(['status'=> 0]);
         return ($output);
    }
}