<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {placeholder} plugin
 *
 * Type:     function<br>
 * Name:     placeholder<br>
 * Purpose:  fill in placeholder image
 *
 * @author Richard Watt <richard@cruciblesolutions.com>
 * @param array                    $params   parameters
 * @param Smarty_Internal_Template $template template object
 * @return string
 */
function smarty_function_placeholder($params, $template)
{
    if (is_numeric($params['width'])) {
      $url['width'] = $params['width'];
    } else {
      $url['width'] = '350';
    }
    if (is_numeric($params['height'])) {
      $url['height'] = $params['height'];
    } else {
      $url['height'] = '150';
    }

    $url = "http://placehold.it/{$url['width']}x{$url['height']}";

    if (isset($params['text-color']) && isset($params['bg-color'])) {
      $url .= '/' . $params['bg-color'];
      $url .= '/' . $params['text-color'];
    }

    if (isset($params['text'])) {
      $url .= '&'.urlencode($params['text']);
    }

    if (isset($params['class'])) {
      $class = ' class="'.$params['class'].'"';
    }

    return "<img src=\"{$url}\" alt=\"\"{$class} />";

}
