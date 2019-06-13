<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class math extends Model
{

    protected $dates = ['deleted_at'];
    protected $table = 'maths';
    protected $fillable = ['id', 'question', 'dapanA', 'dapanB', 'dapanC', 'dapanD', 'dung', 'role'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        return $builder = math::get();
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMath(array $data)
    {
        return math::create($data);
    }


}
