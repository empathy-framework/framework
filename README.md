<p align="center"><img src="https://i.ibb.co/JFPn9PF/Logo-crop.png" width="256px" border="0"></p>

<h1 align="center"> 🚀 Empathy Framework</h1>

[![Latest Stable Version](https://poser.pugx.org/empathy-php/framework/v)](//packagist.org/packages/empathy-php/framework) [![Total Downloads](https://poser.pugx.org/empathy-php/framework/downloads)](//packagist.org/packages/empathy-php/framework) [![License](https://poser.pugx.org/empathy-php/framework/license)](//packagist.org/packages/empathy-php/framework)

**Empathy Framework** - фреймворк для реализации приложений на базе [Empathy Core](https://github.com/empathy-framework/core) и [Empathy Engine](https://github.com/empathy-framework/engine)

## Установка

```
composer create-project empathy-php/framework
```

Для лучшей работы рекомендуется прописать следующий код в корневом файле `composer.json`:

```json
{
    "scripts": {
        "empathy-run": "vendor/empathy-php/core/empathy.exe vendor/empathy-php/core/script.php"
    }
}
```

После чего можно будет исполнять код

```
composer empathy-run
```

для запуска проекта

Код приложения можно писать в файле `app.php` в корневой директории проекта

Авторы: [Подвирный Никита](https://vk.com/technomindlp) и [Кусов Андрей](https://vk.com/postmessagea)
