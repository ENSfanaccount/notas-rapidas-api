<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Sin esto, Event::create() lanza MassAssignmentException
    protected $fillable = ['nombre', 'categoria', 'fecha', 'descripcion'];
}