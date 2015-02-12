<?php
/**
 * Created by Alan.
 * User: alan
 * Date: 12/02/15
 * Time: 06:47
 */

use clases\Paginator;

class IndexController {

    public function showAction(){
        print_r('hola estoy en la action show espero que les haya gustado chau');
        $paginator = new Paginator();
    }
} 