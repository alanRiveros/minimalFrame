<?php
/**
 * Created by Alan.
 * User: alan
 * Date: 12/02/15
 * Time: 19:46
 */

namespace view\home;

use view\BaseView;

class HomeView extends BaseView{

    public function __construct(){
        parent::__construct();
        echo $this->_instance->render('home/index', array('var' => 'Oli Oli'));
    }
} 