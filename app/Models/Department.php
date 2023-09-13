<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public static $department;
    public static function saveInfo($request, $id=null)
    {
        if ($id != null) {
            self::$department = Department::find($id);
        } else {
            self::$department = new Department();
        }

        self::$department->dept_name = $request->dept_name;
        self::$department->dept_code = $request->dept_code;
        self::$department->save();
    }
    public static function statusCheck($id)
    {
        self::$department = Department::find($id);
        if (self::$department->status == 1) {
            self::$department->status = 0;
        } else {
            self::$department->status = 1;
        }
        self::$department->save();
    }
}
