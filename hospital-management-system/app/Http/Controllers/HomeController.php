<?php

namespace App\Http\Controllers;
Use Alert;
use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendPin;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('health/index');
    }

    public function viewAll() {
        $patients = Patient::orderBy('created_at', 'DESC')->get();
        return view('health/patients', [
            'patients' => $patients,
        ]);
    }

    public function get_patient_form()
    {
        
        return view('health/add-patient');
    }

    public function store(Request $request) {

        $data = request();
         // Available alphabetical characters
         $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

         // generate a pin based on 2 * 4 digits + a random character
         $pin = mt_rand(10000, 99999)
             . mt_rand(10000, 99999)
             . $characters[rand(2, strlen($characters) - 2)]; //Str::random(1);
         // shuffle the result
         $string = str_shuffle($pin);

        $patient = Patient::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'date_of_birth' => $data['date_of_birth'],
            'blood_group' => $data['blood_group'],
            'sex' => $data['sex'],
            'pin' => $string,
            'address' => $data['address'],
            // 'image' => $imagePath,
       ]); 

       $data = array(
        'subject'=> $request->subject,
        'name'=> $request->first_name,
        'email'=> $request->email,
        'pin'=> $string
    );

    Mail::to($request->email)->send(new sendPin($data));

    toastr()->success('User Created successfully!, A copy of the pin has been sent to the user');
       
       return back();
    }

    

    public function view() {
        return view('health/pt-list');
    }

    public function getPin(Request $request){
     
       $pin = $request->pin;
        $patients = Patient::wherepin($pin)->first();

    return view('health/viewPatient', [
        'patients' => $patients
    ]);

    }
}
