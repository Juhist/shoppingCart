<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cart_products".
 *
 * @property int $id
 * @property string $name Termék neve
 * @property int $cost Ár
 * @property int $is_special_offer Akciós-e
 * @property string $created_at Létrehozás ideje
 * @property string|null $updated_at Utolsó módosítás ideje
 * @property int $db
 */
class CartProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name','is_special_offer'], 'string'],
            [['cost', 'count'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Product name',
            'cost' => 'Cost',
            'count' => 'Count',
            'is_special_offer' => 'Special offer?',
            'created_at' => 'Crated at',
            'updated_at' => 'Updated_at',
        ];
    }
}
