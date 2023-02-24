<?php

function api_url()
{
    return 'https://pocketfriendly.alphacs.in/api/';
}

function base_url()
{
    return 'https://pocketfriendly.alphacs.in/';
}
function image_url(){
    return 'https://pocketfriendly.alphacs.in/media/';
}


if (!function_exists('callurl')) {

    function callurl($data, $url)
    {

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            'method' => "POST",
            "Accept: application/json",
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($curl);
        return json_decode($result);
    }
}


function getapiresponse($url)
{
    return json_decode(file_get_contents($url));
}

// website details

function getwebdetails($key)
{
    $data = json_decode(file_get_contents(api_url().'get-website-details'));

    if (!empty($data)) {
        if ($data->success == '1') {
            $webdetail = $data->website_details;
        }
    }
    return $webdetail[0]->$key;

}

function getcustomerdetails($key)
{
    return json_decode(file_get_contents(api_url().'get-happy-customers'));

    if (!empty($data)) {
        if ($data->success == '1') {
            $customerdetail = $data->happy_customers;
        }
    }
    return $customerdetail[0]->$key;

}

function getblogs($key)
{
    return json_decode(file_get_contents(api_url().'get-blogs'));
    if (!empty($data)) {
        if ($data->success == '1') {
            $blogdetails = $data->blogs_objects;
        }
    }
    return $blogdetails[0]->$key;
}

function gettherapies()
{
    $therapies=[];
    $data = json_decode(file_get_contents(api_url().'get-therapies/'));
    if (!empty($data)) {
        if ($data->success == '1') {
            $therapies = $data->therapies;
        }
    }
    return $therapies;
}

function getlogin(Request $request)
{
    $data = json_decode(file_get_contents(api_url() . 'generateotp/'));
        if(!empty($data)) {
            if($data->success == '1') {
                $getlogin = $data;
            }
        }
    return $datas = $getlogin;
}

// function getpackages($key)
// {
//     $data = json_decode(file_get_contents(api_url().'get-package-details/'));
//     if (!empty($data)) {
//         if ($data->success == '1') {
//             $packagesdetails = $data->packages;
//         }
//     }
//     echo json_encode($data);exit;

//     return $packagesdetails[0]->$key;

// }