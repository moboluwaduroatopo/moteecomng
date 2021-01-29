<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

// use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use Mail;
class RegisteredUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email of registered users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
   
    public function handle()
    {
        // $totalUsers = \DB::table('users')
        //           ->whereRaw('Date(created_at) = CURDATE()')
        //           ->count();
     // $data= \DB::table('users')->count();
         $data=array('email' =>'adiotawakalit@gmail.com',
         'message' =>'$request->message','subject' =>'$request->subject','fullname' =>'$name->name');
         Mail::to('adiotawakalit@gmail.com')->send(new sendEmail($data));
      
         // Mail::to('adiotawakalit@gmail.com')->send(new SendMailable($data));
  
    }
}
