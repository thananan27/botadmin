 <?php
  

function send_LINE($msg){
 $access_token = 'z+NI9cKbWu9wprSHuvta4EV+kfMhnintttWNxhYyErPoIvVOP/2yw7Zt2OS6JxI78U1/jn2reZAyutSTuGAPLOvfLg3jlakTRw8cb20yAVXrvs0RqYFzarIVHXA533mGLs43tttDzr0XlPk4ChldqwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'C02a00dd43ed0bee70663a93dba3a7572',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
