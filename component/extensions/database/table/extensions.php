<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2017 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/timble/openpolice-platform
 */

namespace Nooku\Component\Extensions;

use Nooku\Library;

/**
 * Extensions Database Table
 *
 * @author  Johan Janssens <https://github.com/johanjanssens>
 * @package Nooku\Component\Extensions
 */
class DatabaseTableExtensions extends Library\DatabaseTableAbstract
{
    public function  _initialize(Library\ObjectConfig $config)
    {
        $config->append(array(
            'name'     => 'extensions',
            'filters'  => array('params' => 'ini')
        ));
        
        parent::_initialize($config);
    }
}