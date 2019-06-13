<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use SoftDeletes;
	
const ROLE_ADMIN = 1;
 const ROLE_STAFF = 2;

    public static $role = [
        self::ROLE_ADMIN => 'Quản trị viên',
        self::ROLE_STAFF => 'Nhân viên',
    ];
   

    protected $dates = ['deleted_at'];
    protected $table = 'users';
    protected $fillable = ['email', 'password', 'name', 'point', 'role'];


    public function createUser(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        return User::create($data);
    }
}
 