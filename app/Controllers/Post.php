<?php

namespace App\Controllers;
// use App\Models\Main;

class Post extends BaseController
{
    // public $mainModel;
    public function submitForm()
    {
        $formData = $this->request->getPost();
        $sheetName = $formData["sheetName"];
        unset($formData["sheetName"]);
        $response = $this->sendPostRequestWithData([
            "sheet" => $sheetName,
            "data" => $formData,
            "lastColAsCheckbox" => true,
        ]);
        return $response;
    }
    public function sendPostRequestWithData($data) {

        // $data = [
        //     "sheet" => "SheetName",
        //     "data" => [
        //         "name" => "Very Normal",
        //         "quantity" => 123
        //     ]
        // ];
        $url = "https://script.google.com/macros/s/AKfycbxq1rTBH3h1X6-ypejNpJcbxEwLGJs3kv0FtLb4EhwTFJCadntxo3iS6v_nb_X-T0HG/exec";
    
        $payload = json_encode($data);
    
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    
        $response = curl_exec($curl);
    
        if ($response === false) {
            $response = curl_error($curl);
        }
    
        curl_close($curl);
        return $response;
    }
}