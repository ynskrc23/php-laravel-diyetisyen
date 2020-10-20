<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yorumlar extends Model
{
   Public function Sayfa(){
       return $this->bleongTo('App/Sayfa');
   }
}
