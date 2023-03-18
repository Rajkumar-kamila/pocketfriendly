<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        // banners
        $data = getapiresponse(api_url() . 'get-homepage-section-banners');

        if (!empty($data)) {
            if ($data->success == '1') {
                $banner = $data->home_page_banner_section;
            }
        }
        $datas['banner'] = $banner;

        // customers details

        $happycustomer = getapiresponse(api_url() . 'get-happy-customers');

        if (!empty($happycustomer)) {
            if ($happycustomer->success == '1') {
                $customerdetail = $happycustomer->happy_customers;
            }
        }
        $datas['customerdetail'] = $happycustomer;

        $response = Http::get('https://pocketfriendly.alphacs.in/api/get-spa-categories/');
        $spastitle = json_decode($response->body());
        $datas['getspacategory'] = $spastitle->category_data;

        return view('index', $datas);
    }

    public function standard_spa()
    {
        return view('standard_spa');
    }
    public function supreme()
    {
        return view('supreme');
    }

    public function testapi()
    {
        $response = Http::post('https://pocketfriendly.alphacs.in/api/contact-us/', [
            'customer_name' => "Bhavesh",
            'email' => 'test@gmail.com',
            "subject" => 'test',
            "comments" => "212121",
        ]);

        if ($response->failed()) {
            return "failure";
        } else {
            return "success";
        }

    }
    public function blogs()
    {
        $data = getblogs(api_url() . 'get-blogs');
        if (!empty($data)) {
            $getblogs = $data;
        }
        $datas['getblog'] = $getblogs;
        
        return view('blogs', $datas);
    }
    
    public function blog_details($slug)
    {
        // $headers = ['blog_slug' => $slug];   
        $response = Http::post('https://pocketfriendly.alphacs.in/api/blog-details/', [
            'blog_slug' => $slug
        ]);

        $blogtitle = json_decode($response->body());
        $datas['fetchblogdetails'] = $blogtitle->data;
        return view('blog-details',$datas);
    }


    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function loyality()
    {
        return view('loyality');
    }
    public function disclaimer_note()
    {
        return view('disclaimer-note');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function terms()
    {
        return view('terms');
    }
    public function faq()
    {
        return view('faq');
    }
    public function dashboard()
    {
        $data = array();

        $headers = ['Authorization' => 'Token '.Session::get('token') ];        
        $data['loyality'] = Http::withHeaders($headers)->get('https://pocketfriendly.alphacs.in/api/loyalty-points-history/');
        $data['wallet'] = Http::withHeaders($headers)->get('https://pocketfriendly.alphacs.in/api/wallet-balance-history/');

        //     'wallet' => 'loyality',
        //     'loyality' => ''
        // ];

        return view('dashboard',$data);
    }
    public function packages()
    {
        $response = Http::get('https://pocketfriendly.alphacs.in/api/get-package-details/');
        $getpackdet = json_decode($response->body());
        
        $data['getspadetails'] = $getpackdet->package_categories;
        // print_r($data['getspacategory']);exit;
        // @dd($data['package_categories'][0]['title']);
        return view('packages',$data);
    }
    public function purchase_package()
    {
        return view('purchase_package');
    }
    public function supreme_package()
    {
        return view('supreme_package');
    }
    public function gift_massages()
    {
        return view('gift_massages');
    }
    public function appointment_history()
    {
        return view('appointment_history');
    }
    public function supreme_history()
    {
        return view('supreme_history');
    }
    public function favourite()
    {
        return view('favourite');
    }
    public function myprofile()
    {
        $headers = ['Authorization' => 'Token '.Session::get('token') ];        
        $item = Http::withHeaders($headers)->get('https://pocketfriendly.alphacs.in/api/get-customer-profile/');
        return view('myprofile', compact('item'));
    }

    // when user submit the enquiry form
    public function submitenquiry(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'customer_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(['code' => 401, 'message' => $validate->errors()->toArray()]);
        } else {

            $response = Http::post('https://pocketfriendly.alphacs.in/api/contact-us/', [
                'customer_name' => $request->customer_name,
                'email' => $request->email,
                "subject" => $request->subject,
                "comments" => $request->message,
            ]);

            if ($response->failed()) {
                return response()->json(['code' => 400, 'message' => 'Api not hit properly']);
            } else {
                return response()->json(['code' => 200, 'message' => 'We will Contact You Shortely ! THANK YOU !']);
            }
        }
    }

    // when user list your business
    public function submitbusinesslist(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'business_name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'contacting_person' => 'required',
            'mobile_number' => 'required',
            'email' => 'required|email',
        ]);
        if ($validate->fails()) {
            return response()->json(['code' => 401, 'message' => $validate->errors()->toArray()]);
        } else {

            $response = Http::post('https://pocketfriendly.alphacs.in/api/list-your-business/', [
                'business_name' => $request->business_name,
                'state' => $request->state,
                'city' => $request->city,
                'contacting_person' => $request->contacting_person,
                "mobile_number" => $request->mobile_number,
                'email' => $request->email,
            ]);

            if ($response->failed()) {
                return response()->json(['code' => 400, 'message' => 'Api not hit properly']);
            } else {
                return response()->json(['code' => 200, 'message' => '! THANK YOU ! For listing you business']);
            }
        }
    }



    public function sendloginotp(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'phone_number' => 'required',
            // 'purpose'=> 'login',
        ]);

        if ($validate->fails()) {
            return response()->json(['code' => 401, 'message' => $validate->errors()->toArray()]);
        } else {

            if (!empty($request->otp)) {

                $response = Http::post('https://pocketfriendly.alphacs.in/api/customer-login/', [
                    'otp' => $request->otp,
                    'order_id' => Session::get('order_id'),
                ]);

                // $response->body();

                if ($response->getStatusCode() == 200) {

                    $det = json_decode($response->body());
                    if ($det->success == 1) {

                        Session::put('order_id', '');
                        Session::put('token', $det->token);
                        Session::put('mobile', $request->phone_number);
                        return response()->json(['code' => 200, 'message' => $det->message]);

                    } else {
                        return response()->json(['code' => 400, 'message' => $det->message]);
                    }
                } else {
                    return response()->json(['code' => 400, 'message' => 'Something went wrong']);
                }

            } else {

                $response = Http::post('https://pocketfriendly.alphacs.in/api/generate-otp/', [
                    'phone_number' => $request->phone_number,
                    'purpose' => 'login',
                ]);

                if ($response->failed()) {
                    return response()->json(['code' => 400, 'message' => 'Api not hit properly']);
                } else {

                    if ($response->getStatusCode() == 200) {

                        $det = json_decode($response->body());
                        if ($det->success == 1) {

                            Session::put('order_id', $det->order_id);
                            return response()->json(['code' => 200, 'message' => 'OTP send to your mobile number']);

                        } else {
                            return response()->json(['code' => 400, 'message' => $det->message]);
                        }
                    } else {
                        return response()->json(['code' => 400, 'message' => 'Something went wrong']);
                    }
                }

            }

        }
    }


    public function submitmyprofile(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(['code' => 401, 'message' => $validate->errors()->toArray()]);
        } else {
            if(!empty(Session::get('token'))){

                $headers = ['Authorization' => 'Token '.Session::get('token') ];

                $response = Http::withHeaders($headers)->post('https://pocketfriendly.alphacs.in/api/update-customer-profile/', [
                    'full_name' => $request->full_name,
                    'email' => $request->email,
                    "date_of_birth" => $request->date_of_birth,
                    "gender" => $request->gender,
                    // "profile_picture" => $request->profile_picture
                ]);

                if ($response->failed()) {
                    return response()->json(['code' => 400, 'message' => 'Api not hit properly']);
                } else {

                    $result = $response->body();

                    if($result->success == '1') {

                        return response()->json(['code' => 200, 'message' => $result->message]);
                    }else{
                        return response()->json(['code' => 200, 'message' => $result->message]);
                    }
                }
            }else{
                return response()->json(['code' => 400, 'message' => 'Token invalid']); 
            }
        }
    }


    public function logout()
    {
        Session::flush();
        return redirect('/');
    }


}