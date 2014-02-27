<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Helper for prepending URL with base URL
 *
 * @package Plesk_Modules
 * @internal
 */
class pm_View_Helper_BaseUrl extends Zend_View_Helper_Abstract 
{

    /**
     * Add base URL to URL
     *
     * @param string $url
     * @return string
     */
    public function baseUrl($url) { }

    /**
     * Prepare URL for specified controller/action in context of module
     *
     * @param array $params
     * @return string
     */
    public function moduleUrl($params) { }

}
