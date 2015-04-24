<?php

/**
 * Processor for handling operation with css files
 *
 * @package    View
 * @subpackage Helper
 * @version    0.0.1
 * @author     Alexey S. Kachayev <kachayev@gmail.com>
 * @link       https://github.com/kachayev/zend-fw-head-compressor
 */
class Dm_View_Helper_Head_FileStylesheet
    extends Dm_View_Helper_Head_File
{
    /**
     * Check if file/source is cachable
     *
     * @param  array  $item
     * @return boolen
     */
    public function isCachable($item)
    {
        // Don't cache if data-allow-caching is false
        if(!isset($item->extras)  || !isset($item->extras['data-allow-caching']) || $item->extras['data-allow-caching'] === 'false') {
            return false;
        }
        return parent::isCachable($item);
    }

    /**
     * Return path to file described in item
     *
     * @param  stdClass $item
     * @return string|null
     */
    protected function _getItemPath($item)
    {
        if(empty($item->href)) {
            return null;
        } else {
            return preg_replace('/(\/)(.+)\?(.+)/', '$2', $item->href);
        }
    }

    /**
     * Return conditional attributes for item
     *
     * @param  stdClass $item
     * @return string|null
     */
    protected function _getItemConditional($item)
    {
        return isset($item->conditionalStylesheet) ? $item->conditionalStylesheet : false;
    }
}