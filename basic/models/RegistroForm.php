<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * EntryForm is the model behind the entry form.
 */
class RegistroForm extends Model
{
    public $name;
    public $email;
    public $nacionalidad;
    public $direccion;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name and email are both required
            [['name', 'email'], 'required'],
            // email is validated by email()
            ['email', 'email'],
        ];
    }

 }