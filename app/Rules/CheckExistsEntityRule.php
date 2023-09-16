<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class CheckExistsEntityRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $entityType = request()->input('entity_type');
        $table = $this->getTableName($entityType);

        if (!DB::table($table)->where('value', $value)->exists()) {
            $fail('Такого значения нет');
        }
    }

    private function getTableName(string $entityType): string
    {
        switch ($entityType) {
            case 'actor':
                return 'actors';
            case 'director':
                return 'directors';
            case 'genre':
                return 'genres';
            case 'country':
                return 'countries';
            default:
                return '';
        }
    }
}
