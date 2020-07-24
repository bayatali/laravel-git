<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
        //,new Uppercase()
        return [
            'title' =>['required', 'max:50'],
            'description'=>'required',
            'file'=>['required','max:1000','mimes:jpeg,png,jpg']

        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'لطفا عنوان مطلب خود را وارد کنید',
            'title.max'=>'تعداد کاراتر باید بیش از سه باشد.',
            'description.required'=>'لطفا توضیحات مطلب خود را وارد کنید',
            'file.required'=>'لطفا تصویر اصلی را انتخاب کنید',
            'file.max'=>'حجم فایل نباید بیشتر از 1000 کیلوبایت باشد',
            'file.mimes'=>'قالب فایل به صورت jpeg,png,jpg باید باشد'
        ];
    }
}
