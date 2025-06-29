<?php

namespace App\Http\Requests;

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use Closure;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
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
            'title' => 'required|max:256',
            'description' => 'required',
            'longDescription' => 'required',
            'priority' => [Rule::enum(TaskPriority::class)],

            'status' => [
                Rule::enum(TaskStatus::class),
                function (string $attribute, mixed $value, Closure $fail) {
                    if ($this->boolean('completed') && $value !== TaskStatus::COMPLETED->value) {
                        $fail('Status must be COMPLETED when completed is true.');
                    }
                }
            ],

            'completed' => [
                'accepted_if:status,' . TaskStatus::COMPLETED->value,
            ]
        ];
    }
}
