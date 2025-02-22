<?php

namespace App\Http\Requests\Todolist;

use DateTime;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class AddTodoRequest extends FormRequest
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
            'content'  => 'required',
            'deadline' => 'required|date',
        ];
    }

    public function userId() : int {
        return $this->user()->id;
    }

    public function content(): string {
        return $this->input('content');
    }

    public function deadline(): string {
        return $this->input('deadline');
    }
}
