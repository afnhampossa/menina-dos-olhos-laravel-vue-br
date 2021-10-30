<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierCreateRequest;
use App\Models\User;
use App\Repositories\SupplierRepository;
use App\Validators\SupplierValidator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Models\Supplier;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SupplierController extends Controller
{

    protected $repository;
    protected $validator;
    protected $user, $supplier;


    public function __construct(SupplierRepository $repository,SupplierValidator $validator, User $user, Supplier $supplier)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->user = $user;
        $this->supplier = $supplier;
    }

    public function create(){
        return view("front.suppliers.create")->with(['msg' => '']);
    }

    public function store(Request $request){
        try {

           

            $verifyUser = User::where(['email' =>$request['email']])->count();
            if($verifyUser>0){
                return view('front.suppliers.create')->with(['msg' => 'existe']);
            }else{

                $userData = [
                    "name" => $request['name'],
                    "email" => $request['email'],
                    'password' => bcrypt( $request['email']), // password
                    'remember_token' => Str::random(10),
                    'status'=> false,
                ];

                $user = $this->user->create($userData);

                $user->roles()->sync(['role_id'=>3]);
                
                $client = new Supplier();
                $client->user_id = $user->id;
                $client->document = $request['document'];
                $client->date_of_birth = Carbon::parse($request['date_of_birth']);
                $client->phone = $request['phone'];
                $client->whatsapp = $request['whatsapp'];
                $client->address = $request['address'];
                $client->number_builder = $request['number_builder'];
                $client->zipcode = $request['zipcode'];
                $client->city = $request['city'];
                $client->state = $request['state'];
                $client->schooling = $request['schooling'];
                $client->specialty = $request['specialty'];
                $client->professional_document = $request['professional_document'];
                $client->facebook = $request['facebook'];
                $client->instagram = $request['instagram'];
                $client->youtube = $request['youtube'];
                $client->linkedin = $request['linkedin'];
                // $client->photo = $data['photo'];
                // $client->curriculum = $data['curriculum'];
                $client->why = $request['why'];
                $client->bank_account = $request['bank_account'];
                $client->status = 1;

                $client->save();


                $dataemail = array(
                    'saudacao'      =>  $request['name'],
                    'welcame'      =>  'Bem-vinda ao universo Menina dos Olhos!',
                    'pupila'    => '',
                    'message1'      =>  'A partir de agora vou te chamar de Parceira Menina dos Olhos, tá?',
                    'message2'  =>'',
                    'footer1'   =>   'Bem-vinda Parceira!',
                    'footer2' => 'Abraço, a Menina dos Olhos!'
                );
                Mail::to($request['email'])->send(new SendMail($dataemail));
        
                return view('front.suppliers.create')->with(['msg' => 'success']);
            }
        }
        catch(Exception $ex){
            return view('front.suppliers.create')->with('msg', 'error');
        }
    }
}
