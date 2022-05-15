<?php

use Illuminate\Support\Facades\Mail;
/**
 * //解密
 * @param string $email  邮箱账号
 * @param string $subject  主题
 * @param string $text  内容
 */
function sendemail($email,$subject,$text){
        if($email==null)
        {
            return
                json_fail('请输入邮箱后查询!', null, 100);
        }
        else{
        Mail::raw($text, function ($message) use ($subject, $email) {
        $message->subject($subject);
        // 发送到哪个邮箱账号
        $message->to($email);
    });
    // 判断邮件是否发送失败
    return $email ?
        json_success('邮件发送成功!', $email, 200):
        json_fail(' 邮件发送失败!', null, 100);
        }
}
