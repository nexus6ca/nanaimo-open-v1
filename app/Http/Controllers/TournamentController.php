<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Players;
use App\Http\Requests;

class TournamentController extends Controller
{
    public function index() {
        return Redirect::to('/tournament/display');
    }

    public function display() {

        return view('display');
    }

    public function add(){
        $prov = array(
            "BC", "AB", "SK", "MB", "ON", "QC", "NB", "NS", "PEI", "NL", "NWT", "YT", "NU", "USA", "Foriegn"
        );

        return view('add', ['prov' => $prov]);
    }

    public function save($id = null){
    // Input dat

        if($id != null) {
            //
        } else {
            $player = new Players();
        }
        $player->id = null;
        $player->firstName           = Input::get('firstName');
        $player->lastName            = Input::get('lastName');
        $player->rating              = Input::get('playerRating');
        $player->Email               = Input::get('playerEmail');
        $player->prov                = Input::get('province');
        $player->altEmail            = Input::get('billingEmail');
        $player->city                = Input::get('address');
        $player->age                 = Input::get('age');
        $player->byeRounds           = Input::get('bye');
        $player->membershipOption    = Input::get('CFC');
        ($player->membershipOption == 'CFCmember' ? $player->CFCNumber = Input::get('CFCNumber')
                                                  : $player->CFCNumber = 0 );
        $player->save();

        return Redirect::to('tournament/display');
    }

    public function registered()
    {
        $players = new Players();
        $registered = $players->all();
        return view('registered')->with('registered', $registered);
    }
}
