<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "menu_id" => ["required","integer"],
            "customer_name" => ["required","string","max:255"],
            "customer_phone" => ["required","string"],
            "customer_address" => ["required","string"],
            "quantity" => ["required","integer"],
            "status" => ["nullable","string","max:255"],
            "payment_status" => ["nullable","string"],
            "payment_method" => ["nullable","string"],
            "price" => ["required","integer"],
            "notes" => ["nullable"],
        ];
    }
}
