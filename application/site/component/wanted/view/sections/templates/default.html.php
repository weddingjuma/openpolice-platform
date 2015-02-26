<?
/**
 * Belgian Police Web Platform - Wanted Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */
?>

<ktml:module position="left">
    <?= import('list.html') ?>
</ktml:module>

<? foreach($sections as $section) : ?>
    <div class="article">
        <h1 class="article__header">
            <a href="<?= helper('route.section', array('row' => $section)) ?>">
                <?= escape($section->title);?>
            </a>
        </h1>

        <?= import('com:wanted.view.articles.default_list.html', array('articles' => object('com:wanted.model.articles')->section($section->id)->limit('3')->getRowset())) ?>

        <a class="article__readmore" href="<?= helper('route.section', array('row' => $section)) ?>"><?= translate('All section'.$section->id) ?></a>
    </div>
<? endforeach; ?>