<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:55',
            'location' => 'required|string',
            'organization' => 'required|string',
            'phone' => 'required|string|max:10',
            'd_8th' => '',
            'd_8th_start' => '',
            'd_8th_end' => '',
            'd_9th' => '',
            'd_9th_start' => '',
            'd_9th_end' => '',
            'd_10th' => '',
            'd_10th_start' => '',
            'd_10th_end' => '',
        ];
    }
}
