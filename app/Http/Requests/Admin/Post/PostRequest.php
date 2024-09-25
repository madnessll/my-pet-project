<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
    $rules = [
      "title" => "required|string",
      "content" => "required|string",
      'category_id' => 'required|exists:categories,id',
    ];

    if ($this->isMethod('post')) {
      $rules["image"] = "required|image";
    }

    if ($this->isMethod('put') || $this->isMethod('patch')) {
      $rules["image"] = "nullable|image";
    }

    return $rules;
  }

  public function messages()
  {
    return [
      "title.required" => "Чел ты обязан заполнить это поле",
      "content.required" => "Чел ты обязан заполнить это поле",
      "image.required" => "Чел ты обязан заполнить это поле",
    ];
  }
}
