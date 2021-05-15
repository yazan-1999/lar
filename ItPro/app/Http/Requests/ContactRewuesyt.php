<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRewuesyt extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|mon:5|max:50',
            'message' => 'required'
        ];
    }
    public function attributes()
    {
        return[
            'name' => 'имя'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'поле имя являеться обязательным',
            'email.required' => 'поле email являеться обязательным',
            'subject.required' => 'поле тема являеться обязательным',
            'message.required' => 'поле сообщение являеться обязательным'
        ];
    }

    
}
