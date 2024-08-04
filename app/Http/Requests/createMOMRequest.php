<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createMOMRequest extends FormRequest
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
            'meeting_name' => 'required',
            'description' => 'required',
            'meeting_date' => 'required|after:yesterday',
            /*'time' => 'required|after:1 hours',*/
             /*'start_time' => 'date_format:H:i',*/
            /*'meeting_time' => 'required|date_format:H:i',*/

        ];
    }
}
