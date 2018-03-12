<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendSignUpMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mail_binding;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail_binding)
    {
        $this->mail_binding = $mail_binding;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail_binding = $this->mail_binding;

        Mail::send('email.signUpEmailNotification', $mail_binding,
        function ($mail) use ($mail_binding){
            //寄件人
            $mail->to($mail_binding['email']);
            //收件人
            $mail->from('sun.ios06444@gmail.com');
            //郵件主旨
            $mail->subject('恭喜註冊 NCUT Learning 影片學習網 成功');
        });
    }
}
