<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;
  
    public $fillable = ['names', 'email', 'phone', 'subject', 'messages'];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "kabosierik@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}