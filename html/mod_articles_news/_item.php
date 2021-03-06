<?php
/**
 * @version		$Id: _item.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
?>
<?php if (!$params->get('intro_only')) :
	echo $item->afterDisplayTitle;
endif; ?>
<?php echo $item->beforeDisplayContent; ?>
<table class="vt_img_fix contentpaneopen">
<tr>
	<td valign="top">
    <?php if ($params->get('item_title')) : ?>
        <<?php echo $params->get('item_heading'); ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
        <?php if ($params->get('link_titles') && $item->link != '') : ?>
            <a href="<?php echo $item->link;?>">
                <?php echo $item->title;?></a>    
        <?php else : ?>
            <?php echo $item->title; ?>
        <?php endif; ?>
        </<?php echo $params->get('item_heading'); ?>>
    
    <?php endif; ?>
        <div class="vtem_news_text text_float_left">    
        <?php echo $item->introtext; ?>
        </div>
			<?php if (isset($item->link) && $item->readmore && $params->get('readmore')) :
                echo '<a class="vtem_readon" href="'.$item->link.'">'.$item->linkText.'</a>';
            endif; ?>
    </td>
</tr>
</table>
