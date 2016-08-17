<?php
namespace lo\modules\playground\models;

use lo\core\db\TActiveRecord;
use Yii;

/**
 * Class Menu
 * Модель меню в админке
 * @package lo\modules\core\models
 */

class Formplay extends TActiveRecord
{
    //use \lo\modules\eav\EavTrait;

    public $eav;

    public static function tableName()
    {
        return "{{%pg__form}}";
    }

    /**
     * @inheritdoc
     */
    public function metaClass()
    {
        return FormplayMeta::className();
    }

    /**
     * @return \yii\db\ActiveQuery
     
    public function getEavAttributes()
    {
        return \lo\modules\eav\models\EavAttribute::find()
            ->joinWith('entity')
            ->where([
                'categoryId' => 0, // можно привязать к разной категории
                'entityModel' => $this::className()
            ]);
    }
	*/
}