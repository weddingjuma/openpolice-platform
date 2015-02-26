<?php
/**
 * Belgian Police Web Platform - Lost Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Library;

class FoundViewItemHtml extends Library\ViewHtml
{
    public function render()
    {
        //Get the article
        $item = $this->getModel()->getData();

        //Set the pathway
        $this->getObject('application')->getPathway()->addItem($item->title, '');

        //Get the attachments
        if ($item->id && $item->isAttachable()) {
            $this->attachments($item->getAttachments());
        }

        // Get the street
        if($item->isLocatable() && $street = $item->getStreets()->top())
        {
            $item['street'] = $street->title;
        }

        return parent::render();
    }
}