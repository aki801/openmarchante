<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 *MModelo para EntryForm
 */
class EntryForm extends Model
{
    public $name;
    public $email;

    /**
     * @return array the validation rules.
     */
    public function rules() /*reglas de validacion*/
    {
        return [
            // nname y email son requeridas
            [['name', 'email'], 'required'],

            //email es validado por email()
            ['email', 'email'],
        ];
    }

}
