<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2007 - 2017 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/timble/openpolice-platform
 */

namespace Nooku\Library;

/**
 * Controller Viewable Interface
 *
 * @author  Johan Janssens <https://github.com/johanjanssens>
 * @package Nooku\Library\Controller
 */
interface ControllerViewable
{
    /**
     * Get the controller view
     *
     * @throws	\UnexpectedValueException	If the view doesn't implement the ViewInterface
     * @return	ViewInterface
     */
    public function getView();

    /**
     * Set the controller view
     *
     * @param	mixed	$view   An object that implements ObjectInterface, ObjectIdentifier object
     * 					        or valid identifier string
     * @return	ControllerInterface
     */
    public function setView($view);
}