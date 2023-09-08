<?php

namespace App\Http\Controllers\cp;

use Illuminate\Http\Request;
use Mail;
use App\Models\Timesetup;
use App\Mail\SendMail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Projects;

class EmailController extends Controller{
    const PERPAGE = 5;

    public function test()
    {
        $testMailData = [
            'title' => 'Test Email From AllPHPTricks.com',
            'body' => 'This is the body of test email de erico.'
        ];

        Mail::to('nomenaiaina02@gmail.com')->send(new SendMail($testMailData));

        dd('Success! Email has been sent successfully.');
    }

    public function emailCompose(){
        return view('user.emailCompose');
    }

    public function emailSetupList(){
        $projects = Projects::simplePaginate(self::PERPAGE);
        $timesetup = Timesetup::all();
        return view('cp.emailSetupList',['projects'=>$projects,'timesetup'=>$timesetup]);
    }

}