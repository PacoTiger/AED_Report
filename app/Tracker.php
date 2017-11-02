<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $fillable = ['day',
                            'time',
                            'agent',
                            'speaker',
                            'segmentation',
                            'lead',
                            'call',
                            'tMinute',
                            'deal',
                            'iSegundos',
                            'tAvg',
                            'iSecondsAvg'
                            ];

}
