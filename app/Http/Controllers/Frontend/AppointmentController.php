<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Appointment;
use App\Models\AppointmentServices;
use App\Models\Doctor;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // dd(Cookie::get('patient_code'));
        // Cookie::queue(Cookie::forget('patient_code'));
        $doctors = Employee::where('type', '1')->where('status', '1')->get();
        $services = Service::where('status', '1')->where('category_id', '>', '0')->get();
        return view('frontend.appointment.index', compact('doctors', 'services'));
    }

    public function sendSmsNotificaition(Request $request)
    {
        $basic = new \Vonage\Client\Credentials\Basic("53b1df35", "SbnDwekaSFC9s0Rb");
        $client = new \Vonage\Client($basic);
        $randomOtp = random_int(1000, 9999);

        $phoneNumberRequest = $request->input("phone_number");

        if ($phoneNumberRequest[0] == "0") {
            $phoneNumberRequest = str_replace("$phoneNumberRequest[0]", "84", $phoneNumberRequest);
        }
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($phoneNumberRequest, "HSMILE", $randomOtp)
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
        session(['otp' => $randomOtp]);
    }


    public function booking(Request $request)
    {
        {
            $request->validate(
                [
                    'nhapOtp' => 'required|max:4',
                    'phone_number' => 'required'
                ],
                [
                    'nhapOtp.required' => 'H??y nh???p M?? OTP',
                    'nhapOtp.max' => 'OTP t???i ??a 4 s???',
                    'phone_number' => 'S??? ??i???n tho???i kh??ng ???????c ????? tr???ng'
                ]
            );
            if ($request->get("nhapOtp") == session()->get('otp')) {
                $alert = '?????t l???ch th??nh c??ng! H??y ki???m tra email ????? bi???t chi ti???t th??ng tin ?????t l???ch';

                $dateat = (isset($request->dateat) && $request->dateat != '') ? date("Y-m-d", strtotime(str_replace('/', '-', $request->dateat))) : date("Y-m-d");
                $dataApp = [
                    'patient_code' => Cookie::get('patient_code') !== null ? Cookie::get('patient_code') : random_int(100000000, 999999999),
                    'name' => $request->name,
                    // 'age' => $request->age,
                    'phone_number' => $request->phone_number,
                    'email' => $request->email,
                    'services' => implode(",", $request->service),
                    'date' => $dateat,
                    'shift' => $request->shift,
                    // 'address' => $request->address,
                    // 'gender' => $request->gender,
                    'note' => $request->note,
                    'status' => 1
                ];
                // echo Cookie::get('patient_code');
                $result = Appointment::create($dataApp);
                $appointment_id = $result->id;
                $data = Patient::where('full_name', 'LIKE', $request->name)->where('phone_number', 'LIKE', $request->phone_number)->where('status', '>', 0)->first();
                if ($data) {
                    $customer_id = $data->id;
                    $model = Appointment::find($appointment_id);
                    $data = ['customer_id' => $customer_id];
                    $model->update($data);
                }
                if (Cookie::get('patient_code') == null) {
                    Cookie::queue('patient_code', $dataApp['patient_code'], 99999999999);
                }

                //Set cookie

                $serviceSelected = Service::whereIn('id', $request->service)->get();
                if ($request->shift = 1) {
                    $shiftSelected = "Ca s??ng";
                } else {
                    $shiftSelected = "Ca chi???u";
                }
                $list_name = '';
                foreach ($serviceSelected as $row) {
                    $list_name .= $row->name . ', ';
                }

                // $to_name = "H-smile";
                // $to_email = $request->email;
                // $data = array(
                //     "name" => $request->name,
                //     "serviceSelected" => rtrim($list_name, ', '),
                //     "dateSelected" => Carbon::parse($request->date_at)->format('Y-m-d'),
                //     "shiftName" => $shiftSelected,
                //     "descRequest" => $request->description
                // );
                // Mail::send('frontend.mail.sendmail', $data, function ($message) use ($to_name, $to_email) {
                //     $message->to($to_email)->subject('Nha Khoa H-Smile ???? ti???p nh???n y??u c???u ?????t l???ch c???a qu?? kh??ch');
                //     $message->from($to_email, $to_name);
                // });


                $alert = "?????t l???ch th??nh c??ng! H??y ki???m tra email ????? bi???t chi ti???t th??ng tin ?????t l???ch";
                $request->session()->forget('otp');
            } else {
                $alert = 'Sai m?? OTP';
            }


            return redirect()->route('hsmile.appointment')->with('alert', $alert);


        }

        //     return redirect()->route('hsmile.appointment')->with(['status' => 'success', 'flash_message' => '?????t l???ch h???n th??nh c??ng!']);
        // }

        function getDoctor(Request $request)
        {
            $service = $request->service;
            $jsonObj = Employee::where('status', 1)->where('type', 1)->where('services', 'like', '%' . $service . '%')->get();
            echo json_encode($jsonObj);
        }
    }
}
