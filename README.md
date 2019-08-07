<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii Framework Masked input widget Extension</h1>
    <br>
</p>

This is the Masked Input extension for [Yii framework](http://www.yiiframework.com). It provides a masked input widget based on
[jQuery Input Mask plugin](http://robinherbots.github.io/Inputmask/).

For license information check the [LICENSE](LICENSE.md)-file.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```
composer require --prefer-dist iamguba/yii-masked-input
```

Usage
-----

To use MaskedInput, you must set the [[mask]] property. The following example
shows how to use MaskedInput to collect phone numbers:

```php
echo MaskedInput::widget([
    'name' => 'phone',
    'mask' => '999-999-9999',
]);
```
You can also use this widget in an [[ActiveForm]] using the [[ActiveField::widget()|widget()]]
method, for example like this:

```php
<?= $form->field($model, 'from_date')->widget(iamguba\MaskedInput\MaskedInput::class, [
    'mask' => '999-999-9999',
]) ?>
```
