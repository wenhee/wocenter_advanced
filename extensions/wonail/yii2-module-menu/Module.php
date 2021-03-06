<?php

namespace wocenter\backend\modules\menu;

use wocenter\backend\core\Modularity;

class Module extends Modularity
{
    
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'wocenter\backend\modules\menu\controllers';
    
    /**
     * @inheritdoc
     */
    public $defaultRoute = 'category';
    
}
