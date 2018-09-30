<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasklist extends Model
{
    protected $table      = "tasklist";
    protected $primaryKey = "CDTASK";
    protected $fillable   = ["NMTASK", "FGSTATUS", "DSTASK"];
    public $timestamps    = false;
}
