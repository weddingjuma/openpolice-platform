<?php
/**
 * Belgian Police Web Platform - Police Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Library;

class PoliceControllerPage extends Library\ControllerView
{
    public function _actionRender(Library\CommandContext $context)
    {
        $page = parent::_actionRender($context);

        $url = clone($context->request->getUrl());

        $site       = $this->getObject('application')->getSite();
        $languages  = $this->getObject('application.languages');

        $route = $url->getPath();
        $route = str_replace($site, '', $route);
        $route = ltrim($route, '/');

        $language  = $languages->find(array('slug' => strtok($route, '/')));

        if(!count($language))
        {
            foreach($this->getObject('request')->getLanguages() as $language)
            {
                if(in_array($language, $languages->slug, true))
                {
                    // Redirect to browser language
                    return $this->getObject('component')->redirect('/'.$site.'/'.$language);
                } else {
                    // Redirect to primary language
                    return $this->getObject('component')->redirect('/'.$site.'/'.$languages->getActive()->slug);
                }
            }
        }

        if (isset($url->query['language']) && $context->request->getFormat() == 'html')
        {
            $config = array(
                'package'   => null,
                'category'  => null,
                'language'  => $url->query['language']
            );

            $template = Library\ObjectManager::getInstance()->getObject('com:pages.view.page')->getTemplate();
            $href = $this->getObject('com:police.template.helper.string', array('template' => $template))->languages($config);

            return $this->getObject('component')->redirect($href);
        }

        return $page;
    }
}