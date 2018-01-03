<?php
namespace yiioctopus\adminview;

use Yii;
use yii\bootstrap\Html;

class MainMenu extends \yii\bootstrap\Nav
{ 

    /**
     * Initializes the widget.
     */
    public function init()
    {	
		echo Html::beginTag('div',['class' => 'sidebar-nav']);
			
			$Html = [];
			
			foreach($this->items as $val)
			{
				$Html[] = Html::tag('li',Html::a($val['label'].Html::tag('i','',['class'=>'fa fa-collapse']),'javascript:void(0);',['data-target'=>'.'.$val['target'],'class'=>'nav-header collapsed','data-toggle'=>'collapse']));
					
					$li = [];
					
					foreach($val['items'] as $value)
					{
						$li[] = Html::tag('li',Html::a(Html::tag('span','',['class'=>'fa fa-caret-right']).' '.$value['label'],$value['url']),empty(array_diff($value['url'],$this->options['active']))?['class'=>'active']:[]);
					}
				$Html[] = Html::tag('ul',implode('',$li),['class'=>$val['target'].' nav nav-list collapse']);
			}
			echo Html::tag('ul',implode('',$Html));
			
		echo Html::endTag('div');
    }
	
}