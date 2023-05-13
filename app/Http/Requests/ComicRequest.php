<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb' => 'url|nullable|ends_with:png,jpg,webp,svg,ico',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => ['required',
            Rule::in(['comic book', 'graphic novel'])
            ],
            'artists' => 'required',
            'writers' => 'required'
        ];
    }

    public function messages(){
        return [

            'required' => 'Il campo non può essere vuoto',
            'thumb.url' => 'Inserire un URL valido',
            'thumb.ends_with' => 'Specificare il tipo di file (es: .png - .jpg - .webp - .svg)',
            'title.max' => 'Massimo 100 caratteri',
            'price.max' => 'Massimo 10 caratteri',
            'series.max' => 'Massimo 50 caratteri',
            'sale_date.date' => 'Inserire un formato valido (YYYY/MM/DD)'
        ];
    }
}
