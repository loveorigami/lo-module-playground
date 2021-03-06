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
    const SEO_TAB = "seo";
    const TEXT_TAB = "text";
    const CONFIG_TAB = "config";

    /**
     * @inheritdoc
     */

    public function tabs()
    {
        $tabs = parent::tabs();

        $tabs[self::SEO_TAB] = Yii::t('core', "SEO");
        $tabs[self::TEXT_TAB] = Yii::t('core', "Text");
        $tabs[self::CONFIG_TAB] = Yii::t('core', "Config");

        return $tabs;
    }

    protected function config()
    {
        return [
            "parent_id" => [
                "definition" => [
                    "class" => \lo\core\db\fields\ParentListField::class,
                    "title" => Yii::t('core', 'Parent'),
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
                    "showInForm" => false,
                 ]
            ],
            "name" => [
                "definition" => [
                    "class" => \lo\core\db\fields\TextField::class,
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
                    "class" => \lo\core\db\fields\TextField::class,
                    "title" => Yii::t('common', 'Slug'),
                    "isRequired" => true,
                    "showInGrid" => true,
                ],
                "params" => [$this->owner, "slug"]
            ],
            "icon" => [
                "definition" => [
                    "class" => \lo\core\db\fields\TextField::class,
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
                    "class" => \lo\core\db\fields\CheckBoxField::class,
                    "title" => Yii::t('common', 'Onmain'),
                    "showInGrid" => true,
                    "showInFilter" => true,
                    "isRequired" => false,
                    "editInGrid" => true,
                ],
                "params" => [$this->owner, "onmain"]
            ],

            "title" => [
                "definition" => [
                    "class" => \lo\core\db\fields\TextField::class,
                    "title" => Yii::t('common', 'title'),
                    "showInGrid" => false,
                    "isRequired" => false,
                    "tab" => self::SEO_TAB,
                ],
                "params" => [$this->owner, "title"]
            ],

            "text1" => [
                "definition" => [
                    "class" => \lo\core\db\fields\TextField::class,
                    "title" => 'TextField',
                    "showInGrid" => false,
                    "isRequired" => false,
                    "tab" => self::TEXT_TAB,
                ],
                "params" => [$this->owner, "text1"]
            ],

            "text2" => [
                "definition" => [
                    "class" => \lo\core\db\fields\TextAreaField::class,
                    "title" => 'TextAreaField',
                    "showInGrid" => false,
                    "isRequired" => false,
                    "tab" => self::TEXT_TAB,
                ],
                "params" => [$this->owner, "text2"]
            ],

            "text3" => [
                "definition" => [
                    "class" => \lo\core\db\fields\HtmlField::class,
                    "inputClass" =>[
                        'class'=>'lo\core\inputs\HtmlInput',
                        "fileManagerController"=>['elfinder', 'path' => 'page'],
                    ],
                    "inputClassOptions" => [
                        "widgetOptions"=>[
                            'editorOptions'=>[
                                //'preset' => 'basic',
                            ]
                        ],
                    ],
                    "title" => 'HtmlField',
                    "showInGrid" => false,
                    "isRequired" => false,
                    "tab" => self::TEXT_TAB,
                ],
                "params" => [$this->owner, "text3"]
            ],

            "text6" => [
                "definition" => [
                    "class" => \lo\core\db\fields\YaMapField::class,
                    "title" => 'YaMapField',
                    "showInGrid" => false,
                    "isRequired" => true,
                    //"tab" => self::TEXT_TAB,
                ],
                "params" => [$this->owner, "text6"]
            ],


            "text7" => [
                "definition" => [
                    "class" => \lo\core\db\fields\HtmlField::class,
                    "inputClass" =>[
                        'class'=>'lo\core\inputs\HtmlInput',
                        "fileManagerController"=>['elfinder', 'path' => 'page'],
                    ],
                    "inputClassOptions" => [
                        "widgetOptions"=>[
                            'editorOptions'=>[
                                'preset' => 'standard',
                            ]
                        ],
                    ],
                    "title" => 'HtmlField',
                    "showInGrid" => false,
                    "isRequired" => false,
                    "tab" => self::CONFIG_TAB,
                ],
                "params" => [$this->owner, "text7"]
            ],

            "eav" => [
                "definition" => [
                    "class" => \lo\core\db\fields\EavField::class,
                ],
                "params" => [$this->owner, "eav"]
            ],

        ];
    }

}