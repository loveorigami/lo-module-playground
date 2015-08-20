<?php

namespace lo\modules\playground\models;

use lo\core\db\MetaFields;
use Yii;

/**
 * Class MenuMeta
 * Мета описание модели меню
 * @package lo\modules\core\models
 */
class FormplayMeta extends MetaFields
{

    /**
     * @inheritdoc
     */

    protected function config()
    {
        return [
            "parent_id" => [
                "definition" => [
                    "class" => \lo\core\db\fields\ParentListField::className(),
                    "title" => Yii::t('main/app', 'Parent'),
                    "data" => [$this->owner, 'getListTreeData'],
                ],
                "params" => [$this->owner, "parent_id"]
            ],
            "author_id" => [
                'definition' => [
                    "showInGrid" => false,
                    "showInForm" => false,
                ],
            ],
            "created_at" => [
                'definition' => [
                    "showInGrid" => false,
                 ]
            ],
            "name" => [
                "definition" => [
                    "class" => \lo\core\db\fields\TextField::className(),
                    "title" => Yii::t('common', 'Name'),
                    "showInGrid" => true,
                    "showInFilter" => true,
                    "isRequired" => true,
                    "editInGrid" => true,
                ],
                "params" => [$this->owner, "name"]
            ],
            "slug" => [
                "definition" => [
                    "class" => \lo\core\db\fields\TextField::className(),
                    "title" => Yii::t('common', 'Slug'),
                    "isRequired" => true,
                    "showInGrid" => true,
                ],
                "params" => [$this->owner, "slug"]
            ],
            "icon" => [
                "definition" => [
                    "class" => \lo\core\db\fields\TextField::className(),
                    "title" => Yii::t('common', 'Icon'),
                    "showInGrid" => true,
                    "showInFilter" => true,
                    "isRequired" => false,
                    "editInGrid" => true,
                ],
                "params" => [$this->owner, "icon"]
            ],
            "onmain" => [
                "definition" => [
                    "class" => \lo\core\db\fields\CheckBoxField::className(),
                    "title" => Yii::t('common', 'Onmain'),
                    "showInGrid" => true,
                    "showInFilter" => true,
                    "isRequired" => false,
                    "editInGrid" => true,
                ],
                "params" => [$this->owner, "onmain"]
            ],
        ];
    }

}