<?php
/**
 * Belgian Police Web Platform - Questions Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		http://www.police.be
 */

namespace Nooku\Component\Questions;
use Nooku\Library;

class ModelArticles extends Library\ModelTable
{
	public function __construct(Library\ObjectConfig $config)
	{
		parent::__construct($config);

		$this->getState()
		    ->insert('published' , 'int')
            ->insert('category' , 'int')
            ->insert('sort', 'cmd', 'title')
            ->insert('searchword', 'string');
	}

    protected function _buildQueryColumns(Library\DatabaseQuerySelect $query)
    {
        parent::_buildQueryColumns($query);

        $query->columns(array(
            'thumbnail'      => 'thumbnails.thumbnail'
        ));
    }

    protected function _buildQueryJoins(Library\DatabaseQuerySelect $query)
    {
        parent::_buildQueryJoins($query);

        $query->join(array('attachments'  => 'attachments'), 'attachments.attachments_attachment_id = tbl.attachments_attachment_id')
            ->join(array('thumbnails'  => 'files_thumbnails'), 'thumbnails.filename = attachments.path');
    }
	
	protected function _buildQueryWhere(Library\DatabaseQuerySelect $query)
	{
	    parent::_buildQueryWhere($query);
		$state = $this->getState();

		if ($state->search) {
			$query->where('tbl.title LIKE :search')->bind(array('search' => '%'.$state->search.'%'));
		}

        if ($state->searchword) {
            $words = explode(' ', $state->searchword);

            foreach($words AS $word) {
                $query->where('(tbl.title LIKE :search OR tbl.text LIKE :search)')->bind(array('search' => '%' . $word . '%'));
            }
        }
		
		if (is_numeric($state->published)) {
			$query->where('tbl.published = :published')->bind(array('published' => $state->published));
		}

        if(is_numeric($state->category)) {
            $query->where('tbl.categories_category_id = :category')->bind(array('category' => $state->category));
        }
	}
}