<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2017 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/timble/openpolice-platform
 */

use Nooku\Library;

/**
 * Category Element
 *
 * @author  Johan Janssens <https://github.com/johanjanssens>
 * @package Component\Categories
 */
class JElementCategory extends JElement
{
    var $_name = 'category';

    public function fetchElement($name, $value, &$node, $control_name)
    {
        $config = array(
            'name'     => $control_name . '[' . $name . ']',
            'selected' => $value,
            'table'    => $node->attributes('table'),
            'attribs'  => array('class' => 'inputbox'),
        );

        $template = Library\ObjectManager::getInstance()->getObject('com:pages.view.page')->getTemplate();
        $html = Library\ObjectManager::getInstance()->getObject('com:categories.template.helper.listbox',  array('template' => $template))->categories($config);
        return $html;
    }
}