<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Menu;
use Illuminate\Support\Facades\Log;

class MenuExistRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Log::info('MenuExistRule Validation - Value:', ['menu_id' => $value]);
        // Log::info('MenuExistRule Validation - Exists:', ['menu_id' => Menu::where('id', $value)->exists()]);
        if (!Menu::where('id', $value)->exists()) {
            $fail('The selected menu does not exist.');
        }
    }
}
