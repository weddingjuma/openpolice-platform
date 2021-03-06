<?
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2017 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU AGPLv3 <https://www.gnu.org/licenses/agpl.html>
 * @link		https://github.com/timble/openpolice-platform
 */
?>

<?= helper('behavior.mootools') ?>
<?= helper('behavior.modal') ?>

<? $list = (isset($row) && isset($table)) ? $attachments->find(array('row' => $row, 'table' => $table)) : $attachments ?>

<? if(count($list) > '1' || (count($list) == '1' && reset($exclude) == '0')) : ?>
    <ul class="thumbnails">
    <? foreach($list as $item) : ?>
    	<? if($item->file->isImage() && !in_array($item->id, Nooku\Library\ObjectConfig::unbox($exclude))) : ?>
    	<li class="span3">
	    	<a class="thumbnail modal" href="attachments://<?= $item->path; ?>" rel="{handler: 'image'}">
	    	   <img src="attachments://<?= $item->thumbnail ?>" />
	    	</a>
    	</li>
    	<? endif ?>
    <? endforeach ?>
	</ul>

    <ul>
    <? foreach($list as $item) : ?>
    	<? if(!$item->file->isImage()) : ?>
        <li><a href="attachments://<?= $item->path; ?>"><?= escape($item->name) ?></a> (<?= helper('com:files.filesize.humanize', array('size' => $item->file->size));?>, <?= $item->file->extension ?>)</li>
    	<? endif ?>
    <? endforeach ?>
    </ul>
<? endif ?>