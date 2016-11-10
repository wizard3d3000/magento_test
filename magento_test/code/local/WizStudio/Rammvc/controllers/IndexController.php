<?php

class WizStudio_Rammvc_IndexController extends Mage_Core_Controller_Front_Action{
    /*
    public function indexAction(){
        
        $resource = Mage::getSingleton('core/resource');
        $read = $resource->getConnection('core_read');
        $table = $resource->getTableName('rammvc/table_rammvc');

        $select = $read->select()
                ->from($table, array('news_id', 'author', 'book', 'created'))
                ->order('created DESC');

        $news = $read->fetchAll($select);
        Mage::register('registry_rammvc', $news);


        $this->loadLayout();
        $this->renderLayout();
        
    }*/
    
    
    public function indexAction()
    {
        $news = Mage::getModel('rammvc/rammvcmodel')->getCollection()->setOrder('created', 'DESC');
        $viewUrl = Mage::getUrl('rammvc/index/view');
            
        echo '<h1>News</h1>';
        
        var_dump($viewUrl);
        foreach ($news as $item) {
            echo '<h2><a href="'.$viewUrl.'?id='.$item->getId().'">'.$item->getTitle().'</a></h2>';
            echo $viewUrl;
        }
    }

    public function viewAction()
    {
        //die('test_view');
        $newsId = Mage::app()->getRequest()->getParam('id', 0);
        $news = Mage::getModel('rammvc/rammvcmodel')->load($newsId);
        
        if ($news->getId() > 0) {
            echo '<h1>' . $news->getTitle() . '</h1>';
            echo '<div class="content">' . $news->getContent() . '</div>';
        } else {
            $this->_forward('noRoute');
        }
        
    }
    
}