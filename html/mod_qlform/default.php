<?php
/**
 * @package		mod_qlform
 * @copyright	Copyright (C) 2016 ql.de All rights reserved.
 * @author 		Mareike Riegel mareike.riegel@ql.de
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
?>

<div class="qlform<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
    <?php
    echo '<span style="display:none;">{emailcloak=off}</span>';
    require JModuleHelper::getLayoutPath('mod_qlform', 'default_copyright');

    if ((1==$params->get('messageType') OR 3==$params->get('messageType')) AND isset($messages)) require JModuleHelper::getLayoutPath('mod_qlform', 'default_message');
    if (0==$params->get('hideform') OR (1==$params->get('hideform') AND  (!isset($validated) OR (isset($validated) AND 0==$validated))))
    {
        if ('1'==$params->get('showpretext','0')) require JModuleHelper::getLayoutPath('mod_qlform', 'default_pretext');
        if (is_object($form)) require JModuleHelper::getLayoutPath('mod_qlform', 'default_form');
    }
    if (1==$params->get('backbool') AND isset($validated)) require JModuleHelper::getLayoutPath('mod_qlform', 'default_back');
    if (1==$params->get('authorbool')) require JModuleHelper::getLayoutPath('mod_qlform', 'default_author');
?>
</div>
