<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class physical extends Model
{

    protected $dates = ['deleted_at'];
    protected $table = 'physicals';
    protected $fillable = ['id', 'question', 'dapanA', 'dapanB', 'dapanC', 'dapanD', 'dung', 'role'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        return $builder = physical::get();
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createphysical(array $data)
    {
        return physical::create($data);
    }


}
