<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class enghlish extends Model
{

    protected $dates = ['deleted_at'];
    protected $table = 'enghlishes';
    protected $fillable = ['id', 'question', 'dapanA', 'dapanB', 'dapanC', 'dapanD', 'dung', 'role'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        return $builder = enghlish::get();
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createenghlish(array $data)
    {
        return enghlish::create($data);
    }


}
