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