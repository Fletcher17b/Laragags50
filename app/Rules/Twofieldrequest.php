<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Closure;
class Twofieldrequest implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    protected $field1;
    protected $field2;

    public function __construct($field1, $field2)
    {
        //
        $this->field1 = $field1;
        $this->field2 = $field2;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $field1Value = request()->input($this->field1);
        $field2Value = request()->input($this->field2);
        
        return !empty($field1Value) || !empty($field2Value);
    }


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Either ' . $this->field1 . ' or ' . $this->field2 . ' must be present.';
        }
}
