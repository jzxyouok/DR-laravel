<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArRequest extends Request
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
           'title'=>'required',
            'key'=>'required',
            'disc'=>'required',
            'status'=>'required',
            'pic'=>'required'
         ];   
    }
    public  function messages(){
       return [
              'title.required'=>'标题不能为空',  
              'key.required'=>'关键字不能为空',  
              'disc.required'=>'描述不能为空',  
              'status.required'=>'状态不能为空',  
              'pic.required'=>'LOGO不能为空'  
        ];
    }
}
