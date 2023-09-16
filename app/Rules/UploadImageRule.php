<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UploadImageRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $imageInfo = getimagesize($value->getRealPath());
        $width = $imageInfo[0];
        $height = $imageInfo[1];
        $aspectRatio = $width / $height;
        if (abs($aspectRatio - (3 / 4)) > 0.01)
        {
            $fail(':attribute должно быть в соотношении 3:4');
        }
    }
}
