<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function getArticle(){
        $this->show("getArticle");
    }
    public function saveArticle(){
        $this->show("saveArticle");
        
    }
}