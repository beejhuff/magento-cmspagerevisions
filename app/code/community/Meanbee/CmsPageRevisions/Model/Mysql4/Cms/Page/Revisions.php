<?php

class Meanbee_CmsPageRevisions_Model_Mysql4_Cms_Page_Revisions extends Mage_Core_Model_Mysql4_Abstract {
    protected function _construct() {
        $this->_init('meanbee_cmspagerevisions/cms_page_revisions', 'revision_id');
    }
}