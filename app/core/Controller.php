<?php
class Controller
{
   
    public function view($view, $data = [])
    {
        extract($data);
        require_once "../app/views/$view.php";
    }

    public function model($model)
    {   // Plant
        require_once "../app/models/$model.php";    //models/plant.ph
        return new $model; // new Plant return new Plant();
    }
    
    public function security($input) {
      
        $input = trim($input);
        
    
        $input = strip_tags($input);
        
       
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
       
        // $input = preg_replace("/[^a-zA-Z\s'-]/", "", $input);
        
        return $input;
    }
    
    function sendNotification($heading, $content, $subscriberId, $url = null)
    {
        
        $appId = 'fdf09fa1-2b29-4f6d-8aea-59c3e92236ff';
        $restApiKey = 'MTU1NmZhN2MtNGFmMS00YzIwLTk0YTItZDBiMDcyMjUwNjE1';

       
        $fields = array(
            'app_id' => $appId,
            'include_player_ids' => array($subscriberId),
            'headings' => array("en" => $heading),
            'contents' => array("en" => $content),
        );

        if ($url) {
            $fields['url'] = $url; // Include URL if provided
        }

        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',

            'Authorization: Basic ' . $restApiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            // Handle cURL errors
            echo 'Curl error: ' . curl_error($ch);
        }
        curl_close($ch);


        return $response;
    }

    

    


   
}
