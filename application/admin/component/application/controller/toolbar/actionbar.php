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
 * Toolbar Controller Toolbar
 *
 * @author  Johan Janssens <https://github.com/johanjanssens>
 * @package Component\Application
 */
class ApplicationControllerToolbarActionbar extends Library\ControllerToolbarActionbar
{
    public function getCommands()
    {
        $this->addCommand('profile');
        $this->addCommand('logout');

        return parent::getCommands();
    }

    protected function _commandProfile(Library\ControllerToolbarCommand $command)
    {
        $command->href = 'option=com_users&view=user&id='.$this->getController()->getUser()->getId();
    }

    protected function _commandLogout(Library\ControllerToolbarCommand $command)
    {
        $controller = $this->getController();
        $session    = $controller->getUser()->getSession();

        $url = 'option=com_users&view=session&id='.$session->getId();
        $url = $controller->getView()->getRoute($url);

        //Form configuration
        $config = "{method:'post', url:'".$url."', params:{_action:'delete', _token:'".$session->getToken()."'}}";

        $command->append(array(
            'attribs' => array(
                'onclick'    => 'new Koowa.Form('.$config.').submit();',
                'data-action' => 'delete',
            )
        ));
    }
}