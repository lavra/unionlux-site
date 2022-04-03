<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['state','name', 'email', 'message'];
    
    /**
     * Retorna email com todos os caracteres convertidos para minúsculas.
     *
     * @param array $attributes
     * @return \App\Contact
     */
    public function fill(array $attributes)
    {
        !isset($attributes['email']) ?: $attributes['email'] = strtolower($attributes['email']);
        
        return parent::fill($attributes);
    }
}
