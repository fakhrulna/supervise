<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventoryStoreRequest extends FormRequest
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
            "name" => ["required","string","max:255"],
            "quantity" => ["required","integer"],
            "price" => ["required","numeric"],
            "unit" => ["required","string","max:255"],
            "store_name" => ["nullable","string","max:255"],
            "expiry_date" => ["required","string"],
            "buy_date" => ["nullable","string"],
        ];
            // "open_payment_link"     => [
            //     "required", new OpenPaymentLinkExistsRule(
            //         $this->openPaymentLinkRepository,
            //         $this->business_id
            //     ),
            // ],
            // "business_id"       => ["required", "exists:businesses,id,deleted_at,NULL"],
            // "status_id"         => ["sometimes", Rule::in(OpenPaymentLink::ALL_STATUS)]
        // ];
    }
}
