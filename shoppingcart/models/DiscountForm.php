<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class DiscountForm extends Model
{
    public $discount_per;
    public $discount_amount;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['discount_per','discount_amount'], 'integer'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'discount_per' => 'Discount (%Off)',
            'discount_amount' => 'Discount (Amount)',
        ];
    }
}
