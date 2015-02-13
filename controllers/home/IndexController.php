<?php
/**
 * Created by Alan.
 * User: alan
 * Date: 12/02/15
 * Time: 06:47
 */
use view\home\HomeView;
class IndexController {

    public function showAction(){
        $view = new HomeView();
    }
}