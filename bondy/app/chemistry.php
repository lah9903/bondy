<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class chemistry extends Model
{

    protected $dates = ['deleted_at'];
    protected $table = 'chemistries';
    protected $fillable = ['id', 'question', 'dapanA', 'dapanB', 'dapanC', 'dapanD', 'dung', 'role'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        return $builder = chemistry::get();
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createchemistry(array $data)
    {
        return chemistry::create($data);
    }


}
