<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with http://www.network-science.de/ascii/
    const COPYRIGHT = "
    ______               _________          _______  ______   _______  ______    _____   ______  
    (  ___ \ |\     /|   \__    _/|\     /|(       )(  ___ \ (  ___  )/ ___  \  / ___ \ / ___  \  
    | (   ) )( \   / )      )  (  | )   ( || () () || (   ) )| (   ) |\/   )  )( (___) )\/   )  )
    | (__/ /  \ (_) /       |  |  | |   | || || || || (__/ / | |   | |    /  /  \     /     /  /  
    |  __ (    \   /        |  |  | |   | || |(_)| ||  __ (  | |   | |   /  /   / ___ \    /  /   
    | (  \ \    ) (         |  |  | |   | || |   | || (  \ \ | |   | |  /  /   ( (   ) )  /  /   
    | )___) )   | |      |\_)  )  | (___) || )   ( || )___) )| (___) | /  /    ( (___) ) /  /       
    |/ \___/    \_/      (____/   (_______)|/     \||/ \___/ (_______) \_/      \_____/  \_/  
        
     //
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
