<?php

class WizStudio_Rammvc_Model_Rammvcmodel extends Mage_Core_Model_Abstract
{
    
    public function _construct()
    {
        parent::_construct();
        $this->_init('rammvc/rammvcmodel');
    }

}