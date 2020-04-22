<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class youtuber extends Model
{
    //
    protected $primarykey='youtubers';
    public $timestamps=false;

    public function scene()
    {
        return $this->hasMany(video::class,'youtuberID','youtuberID');
    }

}
