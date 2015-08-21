# Getting started with Lo-module-playground

### 1. Установка

```bash
  "repositories": [
    {
      "type": "vcs",
      "url": "http://loveorigami@bitbucket.org/loveorigami/lo-module-playground.git"
    }
  ],
  "minimum-stability": "dev",
  "require": {
       "loveorigami/lo-module-playground": "*"
  }
```

### 2. Update database schema

```bash
$ php yii migrate/up --migrationPath=@vendor/loveorigami/lo-module-playground/migrations
```

### 3. Что входит

* Form - набор полей для формы. Настройки в модели FormMeta

### Список полей

* + CheckBoxField
* HasOneField
* HtmlField
* ListField
* + ParentListField
* PkField
* + SlugField
* + TextAreaField
* TextField
* TimestampField

### Выборки
подробнее тут http://www.it-wiki.org.ua/doku.php/yii2:activerecord
```php

namespace common\models;

use Yii;

class Content extends \yii\db\ActiveRecord
{
...
    public function getAuthor() {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }
...
}

Если вам нужен автор, то надо так:

$data = Content::find()->one()
    ->getAuthor()->one();



Если вам нужны все записи вместе с авторами, то так:

$data = Content::find()
    ->with('author')
    ->all();


```