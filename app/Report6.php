<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report6 extends Model
{
    protected $table="remark";
	protected $fillable=['date', 'no_card', 'subdiv', 'other'];
}
