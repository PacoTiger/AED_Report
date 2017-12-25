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
                            'outcall',
                            'tMinute',
                            'deal',
                            'iSegundos',
                            'tAvg',
                            'iSecondsAvg'
                            ];

}
