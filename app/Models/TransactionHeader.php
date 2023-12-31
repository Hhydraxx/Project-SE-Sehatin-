<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
   use HasFactory;

   protected $guarded = ['id'];

   public function transactionDetail()
   {
      return $this->hasMany(TransactionDetail::class);
   }

   public function user()
   {
      return $this->belongsTo(User::class);
   }

   public function status()
   {
      return $this->belongsTo(Status::class);
   }
}
