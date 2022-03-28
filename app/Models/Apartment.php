<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
  use HasFactory;

  protected $fillable = [
    'number',
    'floor',
    'edifice_id',
    'resident_id',
  ];

  public function resident()
  {
    return $this->belongsTo(Resident::class);
  }

  public function edifice()
  {
    return $this->belongsTo(Edifice::class);
  }

  public static function ary_diff($ary_1, $ary_2)
  {

    $diff = array();

    foreach ($ary_1 as $v1) {
      $flag = 0;
      foreach ($ary_2 as $v2) {
        $flag |= ($v1 == $v2);
        if ($flag) break;
      }
      if (!$flag) array_push($diff, $v1);
    }

    return $diff;
  }
}
