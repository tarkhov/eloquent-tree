<?php
namespace EloquentTree;

use Illuminate\Database\Eloquent\Model;
use EloquentValidation\Database\Eloquent\ModelRules;
use EloquentValidation\Database\Eloquent\ModelRulesTrait;

abstract class TreeModel extends Model implements ModelRules
{
    use ModelRulesTrait;

    public static function rules()
    {
    }
}
