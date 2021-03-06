<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Asset URL
 * 
 * Create a local URL to your assets based on your basepath.
 *
 * @access	public
 * @param   string
 * @return	string
 */
if (!function_exists('asset_url')) {
    function asset_url($uri = '', $group = FALSE) {
        $CI = & get_instance();
        
        if (!$dir = $CI->config->item('assets_path')) {
            $dir = 'assets/'; // change folder name
        }
        
        if ($group) {
            return $CI->config->base_url($dir . $group . '/' . $uri);
        } else {
            return $CI->config->base_url($dir . $uri);
        }
    }
}

/**
 * Less URL
 * Create a local URL to .less file
 *
 * @access	public
 * @param   string
 * @return	string
 */
if (!function_exists('less_url')) {
    function less_url($uri = '', $group = FALSE) {
        $CI = & get_instance();
        
        if (!$dir = $CI->config->item('assets_path')) {
            $dir = '/'; // change folder name
        }
        
        if ($group) {
            return $CI->config->base_url($dir . 'less.php?path=' . $group . '/' . $uri);
        } else {
            return $CI->config->base_url($dir . 'less.php?path=' . $uri);
        }
    }
}
/* End of file url_helper.php */
/* Location: ./application/helpers/url_helper.php */