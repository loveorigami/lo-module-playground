<?php
namespace lo\modules\playground\models;

use lo\core\db\TActiveRecord;
use lo\core\rbac\IPermission;
use Yii;

/**
 * Class Menu
 * Модель меню в админке
 * @package lo\modules\core\models
 */

class Formplay extends TActiveRecord

{

    public $tplDir = '@lo/modules/playground/modules/admin/views/formplay/tpl/';

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
}