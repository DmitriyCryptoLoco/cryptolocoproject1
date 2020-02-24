<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use PulkitJalan\GeoIP\GeoIP;

class MessagesGeoIPController extends Controller
{

    public function index()
    {
        $geoip = new GeoIP();

        $lat = $geoip->getLatitude(); // 51.5141
        $lon = $geoip->getLongitude(); // -3.1969
    }
}
