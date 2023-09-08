<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\SendMail;

class EmailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;
        $testMailData = [
            'title' => 'Test Email From AllPHPTricks.com',
            'body' => 'This is the body of test email de erico.'
        ];

        Mail::to('ericonomena@gmail.com')->send(new SendMail($testMailData));

        // dd('Success! Email has been sent successfully.');
        // \Log::info('Test Email Sent Successfully');
    }
}
