<?php

namespace App\Http\Requests\Organisation;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Comment;
use App\Models\Organisation;

class AddCommentRequest extends FormRequest
{
    public function rules()
       {
           $comment = Comment::class;
           $organsiation = Organisation::class;
           return [
               'text' => ['required', 'string'],
               'username' => ['required', 'string', 'max:40'],
               'rate' => ['required', 'numeric', 'min:0', 'max:5'],
               'organisation_id' => ['required', 'int', 'exists:'.$organsiation.',id'],
               'parent_comment_id' => ['nullable','exists:'.$comment.',id'],
           ];
       }
       public function authorize()
       {
           return true;
       }

}
