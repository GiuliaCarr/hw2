<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Favorite;
use App\Models\Stream;
use App\Models\Profile;
use Session;

class APIController extends BaseController
{

    public function favcharacters()
    {

        if (!Session::get('user_id')) {
            return [];
        }

        $user = User::find(Session::get('user_id'));
        return $user->favorites;
    }
    public function favstreamers()
    {
        if (!Session::get('user_id')) {
            return [];
        }

        $user = User::find(Session::get('user_id'));
        return $user->streams;

    }

    public function loadprofile()
    {
        if (!Session::get('user_id')) {
            return [];
        }
        $user = User::find(Session::get('user_id'));
        if ($user->profiles()->first()) {
            return $user->profiles;
        }
        else return ['ok' => 'noimg'];


    }
    public function loadcharacters()
    {


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://api.genshin.dev/characters/all");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);


        echo $result;


    }

    public function loadstreamers()
    {
        $client_id = 'tsu6j0knufg9r6719kdynytyae1sob';
        $client_secret = '4e3132z7ln3ktlvgd2ka2zmj5v9ugf';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://id.twitch.tv/oauth2/token');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_POST, 1);

        curl_setopt($curl, CURLOPT_POSTFIELDS, 'client_id=tsu6j0knufg9r6719kdynytyae1sob&client_secret=4e3132z7ln3ktlvgd2ka2zmj5v9ugf&grant_type=client_credentials');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/x-www-form-urlencoded'));
        $token = json_decode(curl_exec($curl), true);
        curl_close($curl);





        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.twitch.tv/helix/streams?&game_id=513181&type=live');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $token['access_token'], 'Client-Id: tsu6j0knufg9r6719kdynytyae1sob'));
        $res = curl_exec($curl);
        curl_close($curl);

        echo $res;
    }
    public function save()
    {
        $user_id = Session::get('user_id');
        $name = request('name');
        $vision = request('vision');
        $nation = request('nation');
        $birthday = request('birthday');
        $affiliation = request('affiliation');
        $description = request('description');
        $weapon = request('weapon');


        $user = User::find($user_id);
        if ($user->favorites()->where('name', $name)->first()) {
            return ['ok' => true];
        }

        $favorite = new Favorite;
        $favorite->user = $user_id;
        $favorite->name = $name;
        $favorite->vision = $vision;
        $favorite->nation = $nation;
        $favorite->birthday = $birthday;
        $favorite->affiliation = $affiliation;
        $favorite->description = $description;
        $favorite->weapon = $weapon;

        $favorite->save();

        return ['ok' => true];

    }
    public function savestream()
    {
        $user_id = Session::get('user_id');
        $thumbnail_url = request('thumbnail_url');
        $user_login = request('user_login');
        $user_name = request('user_name');
        $title = request('title');
        $language = request('language');

        $user = User::find($user_id);
        if ($user->streams()->where('user_login', $user_login)->first()) {
            return ['ok' => true];
        }

        $stream = new Stream;
        $stream->user = $user_id;
        $stream->thumbnail_url = $thumbnail_url;
        $stream->user_login = $user_login;
        $stream->user_name = $user_name;
        $stream->title = $title;
        $stream->language = $language;

        $stream->save();

        return ['ok' => true];


    }
    public function savepic()
    {

        $user_id = Session::get('user_id');
        $propic = request('propic');

        $user = User::find($user_id);
        if ($profile = $user->profiles()->where('user', $user_id)->first()) {
            $profile->delete();
        }

        $profile = new Profile;
        $profile->user = $user_id;
        $profile->propic = $propic;

        $profile->save();

        return ['ok' => true];

    }
    public function delete()
    {

        $user_id = Session::get('user_id');
        $name = request('name');

        $user = User::find($user_id);
        if ($favorite = $user->favorites()->where('name', $name)->first()) {
            $favorite->delete();
            return ['ok' => true];
        }


    }
    public function deletestream()
    {

        $user_id = Session::get('user_id');
        $user_login = request('user_login');

        $user = User::find($user_id);
        if ($stream = $user->streams()->where('user_login', $user_login)->first()) {
            $stream->delete();
            return ['ok' => true];
        }

    }

    public function search($character)
    {

        $query = urlencode($character);
        $url = 'https://api.genshin.dev/characters/' . $query;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);


        echo $result;

    }



}