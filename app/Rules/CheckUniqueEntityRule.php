<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CheckUniqueEntityRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $tables = $this->getTables();

        $exists = Collection::make($tables)->contains(function ($table) use ($value) {
            return DB::table($table)->where('value', $value)->exists();
        });

        if ($exists) {
            $fail('Такое :attribute уже есть');
        }
        
    }

    private function getTables(): array
    {
        return ['actors', 'directors', 'countries', 'genres'];
    }
}
