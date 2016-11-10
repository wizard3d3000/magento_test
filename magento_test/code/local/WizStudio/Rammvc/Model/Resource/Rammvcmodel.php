<?php

class WizStudio_Rammvc_Model_Resource_Rammvcmodel extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('rammvc/table_rammvc', 'news_id');
    }

}

