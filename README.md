# Yii2 FancyBox image galary widget uses fancyBox v2.1.5 by Janis Skarnelis

The extension uses jQuery fancyBox v2.1.5 by Janis Skarnelis and makes image galary from php array of structure defined.

[FancyBox image galary PHP Array generator](http://yii2.kadastrcard.ru/fancybox).

![FancyBox image galary](http://yii2.kadastrcard.ru/uploads/fancybox.png)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run:

```bash
composer require slavkovrn/yii2-fancybox
```

or add

```bash
"slavkovrn/yii2-fancybox": "*"
```

to the require section of your `composer.json` file.

Usage
-----

Set link to extension in your view:

```php
use kartik\grid\GridView;
use slavkovrn\fancybox\FancyBoxWidget;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'header' => 'Pictures',
            'content' => function ($data){
                $images = [               // images at popup window of prettyPhoto galary
                    1 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image1.jpg',
                            'title' => 'Image visible in widget',
                        ],
                    2 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image2.jpg',
                            'title' => 'image 1',
                        ],
                    3 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image3.jpg',
                            'title' => 'image 2',
                        ],
                    4 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image4.jpg',
                            'title' => 'image 3',
                        ],
                ];
                return FancyBoxWidget::widget([
                    'id'     =>'fancybox',  // id of plugin should be unique at page
                    'class'  =>'fancybox',    // class of plugin to define style
                    'height' =>'100px',     // height of image visible in widget
                    'width' =>'100px',      // width of image visible in widget
                    'images' => $images,
                ]);
            }
        ],
    ],
]);
```
<a href="mailto:slavko.chita@gmail.com">write comments to admin</a>
