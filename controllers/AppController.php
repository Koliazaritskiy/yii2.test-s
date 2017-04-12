<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.03.2017
 * Time: 19:28
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller{
    protected function setMeta($title = null, $keywords = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }
}