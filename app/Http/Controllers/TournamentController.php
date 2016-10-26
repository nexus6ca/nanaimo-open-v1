<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Players;
use App\Http\Requests;
use Validator;

class TournamentController extends Controller
{
    public function index()
    {
        return Redirect::to('/tournament/display');
    }

    public function display()
    {

        return view('display');
    }

    public function add()
    {
        $prov = array(
            "BC", "AB", "SK", "MB", "ON", "QC", "NB", "NS", "PEI", "NL", "NWT", "YT", "NU", "USA", "Foriegn"
        );

        return view('add', ['prov' => $prov]);
    }

    public function save($id = null)
    {
        // Input data

        if ($id != null) {
            // Currently not editing players
        } else {
            $formData = Input::all();

            $validator = Validator::make(
                array(
                    'firstName' => $formData['firstName'],
                    'lastName' => $formData['lastName'],
                    'rating' => $formData['playerRating'],
                    'Email' => $formData['playerEmail'],
                    'prov' => $formData['province'],
                    'altEmail' => $formData['billingEmail'],
                    'city' => $formData['address'],
                    'age' => $formData['age'],
                    'memberShipOptions' => $formData['CFC'],
                ),
                array(
                    'firstName' => 'required|min:2',
                    'lastName' => 'required|min:2',
                    'rating' => 'required',
                    'Email' => 'unique:players|email',
                    'prov' => 'required',
                    'altEmail' => 'email',
                    'city' => 'required',
                    'age' => 'required',
                    'memberShipOptions' => 'required'
                )
            );

            if ($validator->passes()) {
                $player = new Players();

                $player->id = null;
                $player->firstName = $formData['firstName'];
                $player->lastName = $formData['lastName'];
                $player->rating = $formData['playerRating'];
                $player->Email = $formData['playerEmail'];
                $player->prov = $formData['province'];
                $player->altEmail = $formData['billingEmail'];
                $player->city = $formData['address'];
                $player->age = $formData['age'];
                $player->byeRounds = (isset($formData['bye']) ? implode(",", $formData['bye']):"");
                $player->membershipOption = $formData['CFC'];
                ($player->membershipOption == 'CFCNumber' ? $player->CFCNumber = $formData['CFCNumber'] : $player->CFCNumber = 0);
                $player->save();

                return Redirect::to('tournament/registered ')->with('success', true)
                                 ->with('message', $formData['firstName'] . ' ' . $formData['lastName'] . ' has been registered');
            } else {
                $errors = $validator->errors();
                foreach($errors->all() as $message)
                {
                    $messages[] = $message;
                }
                return view('error')->with('messages', $messages);
            }
        }
    }


    public function registered()
    {

        $players = new Players();
        $registered = $players->all();
        return view('registered')->with('registered', $registered);
    }

    public function error($validator) {
        return $errors;
    }
}
