<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentApart extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rent_aparts';


    protected $guarded = array('id');

    protected $fillable = array('title', 'room', 'acreage', 'price', 'description', 'direction', 'code', 'street', 'district', 'ward', 'lat', 'lng', 'photo', 'gallery');


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;



}
