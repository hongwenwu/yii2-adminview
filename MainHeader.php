<?php
namespace yiioctopus\adminview;

use Yii;
use yii\bootstrap\Html;

class MainHeader extends \yii\bootstrap\NavBar
{ 

	public $brandName = 'Yii Octopus';
	
	public $userName = 'yiioctopus';

    /**
     * Initializes the widget.
     */
    public function init()
    {
        $this->clientOptions = false;
		
		echo Html::beginTag('div', ['class' => 'navbar navbar-default']);
		
			echo Html::beginTag('div', ['class' => 'navbar-header']);
			
				echo Html::a(Html::tag('span',Html::tag('span','',['class' => 'fa fa-paper-plane']).' '.$this->brandName, ['class' => 'navbar-brand']),$this->brandUrl === false ? Yii::$app->homeUrl : $this->brandUrl,$this->brandOptions);
		
			echo Html::endTag('div');
			
			echo Html::beginTag('div', ['class' => 'navbar-collapse collapse']);
			
				$Html[] = Html::a(Html::tag('span','',['class'=>'glyphicon glyphicon-user padding-right-small']).$this->userName.' '.Html::tag('span','',['class' => 'fa fa-caret-down']),'javascript:void(0);',['class' => 'dropdown-toggle','data-toggle' => 'dropdown']);

				$Html[] = Html::beginTag('ul',['class' => 'dropdown-menu']);
					$Html[] = Html::tag('li',Html::a($this->options['account']['name'],$this->options['account']['url']));
					$Html[] = Html::tag('li','',['class' => 'divider']);
					$Html[] = Html::tag('li','Admin Panel',['class' => 'dropdown-header']);
					foreach($this->options['panel'] as $val){
						$Html[] = Html::tag('li',Html::a($val['name'],$val['url']));
					}
					$Html[] = Html::tag('li','',['class' => 'divider']);
					$Html[] = Html::tag('li',Html::a($this->options['logout']['name'],$this->options['logout']['url'],['tabindex'=>'-1']));
				$Html[] = Html::endTag('ul');
				
				echo Html::tag('ul',Html::tag('li',implode('',$Html),['class' => 'dropdown hidden-xs']),['class' => 'nav navbar-nav navbar-right']);
				
			echo Html::endTag('div');
			
		echo Html::endTag('div');
    }
	
}