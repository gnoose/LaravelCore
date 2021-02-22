<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyQuestionMasterTemp extends Model
{
    protected $table = 'survey_question_master_temp';

    protected $primaryKey = 'question_id';

    const CREATED_AT = 'createtime';
    const UPDATED_AT = 'updatetime';
}
