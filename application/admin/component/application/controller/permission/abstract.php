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
 * Abstract Controller Permission
 *
 * @author  Johan Janssens <https://github.com/johanjanssens>
 * @package Component\Application
 */
abstract class ApplicationControllerPermissionAbstract extends Library\ControllerPermissionAbstract
{
    /**
     * Authorize handler for render actions
     *
     * @return  boolean  Return TRUE if action is permitted. FALSE otherwise.
     */
    public function canRender()
    {
        if(parent::canRender() && $this->getUser()->getRole() > 22) {
            return true;
        }

        return false;
    }

    /**
     * Authorize handler for read actions
     *
     * @return  boolean Return TRUE if action is permitted. FALSE otherwise.
     */
    public function canRead()
    {
        if(parent::canRead() && $this->getUser()->getRole() > 22) {
            return true;
        }

        return false;
    }

    /**
     * Authorize handler for browse actions
     *
     * @return  boolean  Return TRUE if action is permitted. FALSE otherwise.
     */
    public function canBrowse()
    {
        if(parent::canBrowse() && $this->getUser()->getRole() > 22) {
            return true;
        }

        return false;
    }

    /**
     * Authorize handler for add actions
     *
     * @return  boolean  Return TRUE if action is permitted. FALSE otherwise.
     */
    public function canAdd()
    {
        if(parent::canAdd() && $this->getUser()->getRole() > 22) {
            return true;
        }

        return false;
    }

    /**
     * Authorize handler for edit actions
     *
     * @return  boolean  Return TRUE if action is permitted. FALSE otherwise.
     */
    public function canEdit()
    {
        if(parent::canEdit() && $this->getUser()->getRole() > 22) {
            return true;
        }

        return false;
    }

    /**
     * Authorize handler for delete actions
     *
     * @return  boolean  Return TRUE if action is permitted. FALSE otherwise.
     */
    public function canDelete()
    {
        if(parent::canDelete() && $this->getUser()->getRole() > 22) {
            return true;
        }

        return false;
    }
}