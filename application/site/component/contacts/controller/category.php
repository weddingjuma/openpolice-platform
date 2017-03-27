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
 * Category Controller
 *
 * @author  Johan Janssens <https://github.com/johanjanssens>
 * @package Component\Contacts
 */
class ContactsControllerCategory extends Library\ControllerModel
{
    public function getRequest()
    {
        $request = parent::getRequest();

        //Display only published items
        $request->query->published = 1;

        return $request;
    }
}