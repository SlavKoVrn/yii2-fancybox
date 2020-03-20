<?php

namespace slavkovrn\fancybox;

use yii\base\Widget;
use yii\web\JqueryAsset;

class FancyBoxWidget extends Widget {
    
    public $id = 'fancybox';
    public $class='fancybox';
    public $width='';
    public $height='';
    public $images=[];

    public $openEffect = 'elastic';
    public $closeEffect = 'elastic';
    public $group = true;

    public function run() {

        parent::run();

        $this->registryScript();

        return $this->render('fancybox',[
            'id' => $this->id,
            'class' => $this->class,
            'width' => $this->width,
            'height' => $this->height,
            'images' => $this->images,
            'group' => $this->group,
        ]);
    }

    protected function registryScript()
    {
        $path = \Yii::$app->getAssetManager()->publish(__DIR__ . '/assets/');

        $this->getView()->registerCssFile($path[1] . '/css/jquery.fancyboxCss.css');

        $this->getView()->registerJsFile(
            $path[1] . '/js/jquery.fancybox.js',
            [
                'position' => \yii\web\View::POS_END,
                'depends'  => ['\yii\web\JqueryAsset'],
            ]
        );

        $script =<<<SCRIPT
            $(function(){
                $('.{$this->class}').fancybox({
                    openEffect	: '{$this->openEffect}',
                    closeEffect	: '{$this->closeEffect}'
                });
            });
SCRIPT;
        $this->getView()->registerJs($script,\yii\web\View::POS_END);
    }
}