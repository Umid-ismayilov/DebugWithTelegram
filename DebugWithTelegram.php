<?php

namespace App;

class DebugWithTelegram
{
    private $token   =  'your-token';
    private $chat_id =  'your-chat_id';

    public function debug($data){
        $info = [
            'chat_id'    => $this->chat_id,
            'parse_mode' => 'html',
            'text'       => '<pre>'.json_encode($data).'</pre>'
            //'text'    => $data
        ];
        $params = http_build_query($info, '', '&');
        $this->sendMessage($params);

    }
    private function sendMessage($params){
        $curl = curl_init();
        $url = "https://api.telegram.org/bot$this->token/".__FUNCTION__."?$params";
        curl_setopt_array($curl, [CURLOPT_URL => $url]);
        curl_exec($curl);
        curl_close($curl);
    }
}
