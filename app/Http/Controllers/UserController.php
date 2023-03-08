<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

    }

    public function create() {
        return view('registrer');
    }

    //Criação do usuário
    public function store(Request $request) {
        $user = $request->all();

        $verifiedUser = User::where('cpf', $user['cpf'])->first();

        if ($user) {
            return redirect()->back()->with('erro', 'Usuário já cadastrado!');
        } else {
            //Cadastrar no Assas
            $url = 'https://www.asaas.com/api/v3/customers';

            $data = array(
                'name' => $user['nome'],
                'cpfcnpj' => $user['cpf'],
                'email' => $user['email'],
                'notificationDisabled' => 'true'
            );

            $headers = array(
                'Content-Type: application/json',
                'access_token: $aact_YTU5YTE0M2M2N2I4MTliNzk0YTI5N2U5MzdjNWZmNDQ6OjAwMDAwMDAwMDAwMDAxNTA2MjY6OiRhYWNoX2IzZWFmMmY1LWFiMGItNDlhMi1hMDE1LTUyMzJlMDJhMWE5Mg==',
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {

                $error_message = curl_error($ch);
                curl_close($ch);
                return redirect()->back()->with('erro', 'Tivemos um pequenos problema, tente novamente mais tarde!');

            } else {

                $data = json_decode($response, true);
                $user['password'] = bcrypt($request->password);
                $user['id_assas'] = $data['id'];
                $user['ticket'] = 0;
                $user = User::create($user);
                Auth::login($user);
                curl_close($ch);
                return redirect()->route('index');

            }
        }

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
