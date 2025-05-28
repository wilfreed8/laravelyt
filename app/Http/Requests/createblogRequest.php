<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createblogRequest extends FormRequest
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
            'title' => ['required','min:8'],
            'slug' => ['required','min-4','regex:/^[0-9a-z\-]+$/'],
            'Content' => ['required']
        ];
    }
  protected function prepareForValidation(){
      $this->merge([
        'slug'=>$this->input('slug') ?:\Str::slug($this->input('title'))
      ]);
  }

}
