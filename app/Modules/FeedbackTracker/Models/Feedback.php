<?php

namespace App\Modules\FeedbackTracker\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $connection = FEEDBACK_CONNECTION;

    protected $table = 'feedbacks';

}
