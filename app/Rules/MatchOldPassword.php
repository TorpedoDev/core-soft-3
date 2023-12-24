<?php

namespace App\Rules;
use Illuminate\Support\Facades\Hash;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MatchOldPassword implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail) :void
    {
        $check =  Hash::check($value, auth()->user()->password);

        if(! $check){
          $fail(__('custom.The old password is wrong'));
        }

    }
}
