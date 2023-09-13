<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    public static $session;
    public static function saveInfo($request, $id=null)
    {
        if ($id != null) {
            self::$session = Session::find($id);
        } else {
            self::$session = new Session();
        }

        self::$session->session_name = $request->session_name;
        self::$session->save();
    }
}
