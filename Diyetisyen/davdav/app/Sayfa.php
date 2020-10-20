<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Sayfa extends Model
{
   //Table name
   protected $table = 'sayfas';
   //Primary Key
   public $primaryKey = 'sayfa_id';
   //Timestamps
   public $timestamps = true;

   Public function Sayfa()
   {
      return $this->bleongTo('App/Yorumlar');
   }

   public function user()
   {
      return $this->belongsTo('App\User');
   }

   public function yorumlar()
   {
      return $this->hasMany('App\Yorumlar','yorum_sayfa_id','sayfa_id');
   }

  

 
  
}

