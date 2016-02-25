<?php
namespace SSCE\Controllers;

class Blog extends Base {
    
    protected $_sTemplate   = 'home.tpl.php';
    
    public function allAction(){
        $aData  = $this->db->select("SELECT * FROM ?_articles ORDER BY date_c DESC LIMIT ?d;", $this->config->project->postsppage);
        
        $this->view->assign("aData", $aData);
    }
    
    public function byNameAction($sName){
        $aPost  = $this->db->selectRow("SELECT * FROM ?_articles WHERE name = ? LIMIT 1;", $sName);
        
        $this->setTemplate('article.tpl.php');
        $this->view->assign("aPost", $aPost);
    }
}