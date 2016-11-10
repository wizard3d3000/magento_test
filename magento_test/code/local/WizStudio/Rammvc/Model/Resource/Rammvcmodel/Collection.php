<?php

class WizStudio_Rammvc_Model_Resource_Rammvcmodel_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('rammvc/rammvcmodel');
    }

}