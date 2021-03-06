<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ClientCreateRequest;
use App\Models\User;
use App\Models\Client;
use App\Repositories\ClientRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Prettus\Validator\Exceptions\ValidatorException;
// use Mail;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var User
     */
    private $user, $client;


    /**
     * ClientController constructor.
     * @param ClientRepository $repository
     * @param User $user
     */
    public function __construct(ClientRepository $repository, User $user, Client $client)
    {
        $this->repository = $repository;
        $this->user = $user;
        $this->client = $client;
    }

    public function create(){
        return view("front.clients.create")->with(['msg' => '']);
    }

    public function teste(Request $request){
        echo $request['nome'];
    }

    // function store_cliente1(Request $request)
    // {
    //     $data = array(
    //         'name'      =>  'Teste',
    //         'message'   =>   'Ola teste'
    //     );

    //     Mail::to('afnhampossa15@gmail.com')->send(new SendMail($data));
    //      return back()->with('success', 'Thanks for contacting us!');

    // }

    public function store_cliente(Request $request){
        try {
            
            // $validated = $request->validated();

            $verifyUser = User::where(['email' =>$request['email']])->count();
            if($verifyUser>0){
                return view('front.clients.create')->with(['msg' => 'existe']);
            }else{

                $userData = [
                    "name" => $request['name'],
                    "email" => $request['email'],
                    'password' => bcrypt( $request['email']), // password
                    'remember_token' => Str::random(10),
                    'status'=> false,
                ];
                
                $user = $this->user->create($userData);


                $client = new Client();
                $client->user_id = $user->id;
                $client->document = '';
                $client->date_of_birth = Carbon::parse('2021-10-07');
                $client->phone = $request['phone'];
                $client->whatsapp = '';
                $client->address = '';
                $client->number_builder = '';
                $client->complement = '';
                $client->zipcode = '';
                $client->city = '';
                $client->state = '';
                $client->has_children = 1;
                $client->marital_status = '';
                $client->working = '';
                $client->has_interest = '';
                $client->status = 1;

                $client->save();

                
                $data = array(
                    'saudacao'      =>  $request['name'],
                    'welcame'      =>  'Bem-vinda ao universo Menina dos Olhos!',
                    'pupila'      =>  'A partir de agora vou te chamar de Pupila, t???',
                    'message1'      =>  '
                        Chegue aqui, n??s queremos cuidar de voc?? como a Menina dos seus Olhos, porque entendemos que todo o processo de separa????o e div??rcio ?? penoso, dif??cil, duro. Acredite, n??s sabemos por que vivemos na pele!
                        Por isso, a Menina dos Olhos tem servi??os voltados para voc?? mulher, que quer e precisa reconstruir sua vida ap??s uma separa????o ou div??rcio, no ??mbito Jur??dico, de Recoloca????o Profissional e Apoio Psicol??gico.
                ',
                'message2'      =>  '
                        Em breve uma de nossas profissionais entrar?? em contato com voc?? para mais informa????es! 
                        J?? estamos muito felizes porque voc?? deu o primeiro passo! N??s te ajudamos a dar o segundo, o terceiro, o quarto; quantos forem necess??rios na sua jornada de reconstru????o! 
                    ',
                    'footer1'   =>   'Bem-vinda Pupila!',
                    'footer2' => 'Abra??o, a Menina dos Olhos!'
                );
                Mail::to($request['email'])->send(new SendMail($data));

                $data_ = array(
                    'saudacao'      =>  'Cliente - Menina dos Olhos',
                    'welcame'      =>  ' Subscri????o pelo site',
                    'pupila'      =>  '',
                    'message1'      =>  '',
                    'message2'      =>  '',
                    'footer1'   =>   '',
                    'footer2' => 'Escrito por, '.$request['name'].' (E-mail: '.$request['email'].')!'
                );
                Mail::to('contato@ameninadosolhos.com.br')->send(new SendMail($data_));

                return view('front.clients.create')->with(['msg' => 'success']);
            }
        }
        catch(Exception $ex){
            return view('front.clients.create')->with('msg', 'error');
        }
    }

    public function store(ClientCreateRequest $request){
        try {

            $validated = $request->validated();
            $userData = [
                "name" => $validated['name'],
                "email" => $validated['email'],
                'password' => bcrypt( $validated['email']), // password
                'remember_token' => Str::random(10),
                'status'=> false,
            ];
            
            $user = $this->user->create($userData);

            $user->roles()->sync(['role_id'=>2]);

            $clientData = [
                'user_id'=>$user->id,
                'document' =>$validated['document'],
                'date_of_birth' =>Carbon::parse($validated['date_of_birth']),
                'phone' =>$validated['phone'],
                'whatsapp' =>$validated['whatsapp'],
                'address' =>$validated['address'],
                'number_builder' =>$validated['number_builder'],
                'zipcode' =>$validated['zipcode'],
                'city' =>$validated['city'],
                'state' =>$validated['state'],
                'has_children' =>$validated['has_children'],
                'marital_status' =>$validated['marital_status'],
                'working' =>$validated['working'],
                'has_interest' =>$validated['has_interest'],
                'status' =>1,
            ];

            $client = $this->repository->create($clientData);

            $message = [
                'message' => 'Pupila cadastrada com sucesso',
                'data'    => $client->toArray(),
            ];
            return response()->json($message);

        } catch (ValidatorException $e) {
           $message = [
                'error'   => true,
                'message' => $e->getMessageBag()
            ];
            return response()->json($message, 422);
        }
    }
}
