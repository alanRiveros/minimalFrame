<?php
/**
 * Created by Alan.
 * User: alan
 * Date: 12/02/15
 * Time: 19:46
 */

namespace view;

class BaseView {

    protected $_instance;

    public function __construct(){
        $this->_instance = new \Mustache_Engine(array(
            'template_class_prefix' => '__Gravysoft_',
            'cache' => CACHE_PATH,
            'cache_file_mode' => 0666, // Please, configure your umask instead of doing this :)
            'cache_lambda_templates' => true,
            'loader' => new \Mustache_Loader_FilesystemLoader(TEMPLATE_PATH),
            'partials_loader' => new \Mustache_Loader_FilesystemLoader(PARTIAL_PATH),
            'helpers' => array('i18n' => function($text) {
                        // do something translatey here...
                    }),
            'charset' => 'ISO-8859-1'
        ));
    }
}