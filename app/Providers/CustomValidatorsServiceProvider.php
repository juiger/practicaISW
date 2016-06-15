<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Validator;

class CustomValidatorsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Validator::extend('rut', function($attribute, $value, $parameters, $validator)
        {
            if(!preg_match('/^[1-9]+\-{1}+[1-9k]{1}+$/i',$value))
                return false;
            $rut = preg_replace('/[^k0-9]/i', '', $value);
            $dv  = substr($rut, -1);
            $numero = substr($rut, 0, strlen($rut)-1);
            $i = 2;
            $suma = 0;
            foreach(array_reverse(str_split($numero)) as $v)
            {
                if($i==8)
                    $i = 2;
                $suma += $v * $i;
                ++$i;
            }
            $dvr = 11 - ($suma % 11);

            if($dvr == 11)
                $dvr = 0;
            if($dvr == 10)
                $dvr = 'K';
            if($dvr == strtoupper($dv))
                return true;
            else
                return false;
        });
        Validator::replacer('rut', function($message, $attribute, $rule, $parameters) {
            return str_replace('validation.rut','Rut Inválido',$message);
        });
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}