<?php
/**
 * @package		mod_qlform
 * @copyright	Copyright (C) 2016 ql.de All rights reserved.
 * @author 		Mareike Riegel mareike.riegel@ql.de
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;

$captchaEnabled = false;

$captchaSet = $params->get('captcha', JFactory::getApplication()->get('captcha', '0'));
foreach (JPluginHelper::getPlugin('captcha') as $plugin)
{
    if ($captchaSet === $plugin->name)
    {
        $captchaEnabled = true;
        break;
    }
}?>
<form method="post" action="<?php echo JText::_(htmlspecialchars($params->get('action'))); ?>" id="mod_qlform_<?php echo $module->id;?>" class="<?php echo $params->get('formclass','form-horizontal');?> form-validate" <?php if (1==$params->get('fileupload_enabled') OR 1==$params->get('fileemail_enabled')) echo ' enctype="multipart/form-data" ';?>>
    <?php
    if (1==$params->get('addPostToForm') AND isset($array_posts) AND is_array($array_posts)) : foreach ($array_posts as $k=>$v) :?>
        <input type="hidden" name="former[<?php echo $k;?>]" value="<?php echo preg_replace("/\"/","",$v);?>" /><?php
    endforeach; endif; ?>
    <?php if(1==$params->get('honeypot',0)) :?>
        <div style="display:none;"><input name="JabBerwOcky" type="text" value="" /></div>
    <?php endif;?>
    <input name="formSent" type="hidden" value="1" />
    <?php
    //echo '<pre>';print_r($form);die;
    foreach ($form->getFieldsets() as $fieldset):
        $fields = $form->getFieldset($fieldset->name);
        echo '<fieldset id="'.$fieldset->name.'"';
        if (isset($fieldset->class)) echo ' class="'.$fieldset->class.'"';
        echo '>';
        if (isset($fieldset->label) AND ''!=$fieldset->label) echo '<legend id="legend'.$fieldset->name.'">'.JText::_($fieldset->label).'</legend>';
        foreach($fields as $field):
            if ($field->hidden): echo $field->input;
            else:
                ?>
                <div class="control-group <?php echo $field->id;?> <?php if (1==$params->get('stylesLabelswithin',0)) echo 'notlabelled'; else echo 'labelled';?> <?php echo $field->class;?>">
                    <?php
                    if (1!=$params->get('stylesLabelswithin',0) OR $obj_helper->formControl.'_sendcopy'==trim($field->id) OR 'spacer'==strtolower($field->type) OR 'checkboxes'==strtolower($field->type)):
                        $label=$field->label;
                        $label=str_replace('}}','>',str_replace('{{','<',preg_replace('/class="/', 'class="control-label ',$label,1)));
                        echo $label;
                    endif; ?>
                    <div class="controls <?php echo $field->id;?>">
                        <?php echo preg_replace('/(?<=class=")([^"]*)(span[0-9]{1,2})([^"]*)/','$1$3',$field->input); ?>
                    </div>
                </div>
            <?php endif;
        endforeach;
        echo '</fieldset>';
    endforeach; ?>
    <?php if (1==$showCaptcha AND $captcha instanceof JCaptcha) require JModuleHelper::getLayoutPath('mod_qlform', 'default_captcha'); ?>
    <div class="submit control-group">
        <div class="controls"><button class="btn btn-large btn-primary submit" type="submit"><?php echo htmlspecialchars(JText::_($params->get('submit'))); ?></button></div>
    </div>
    <?php if (1==$fieldModuleId) : ?>
        <input type="hidden" value="<?php echo $moduleId;?>" name="moduleId" />
    <?php endif; ?>
</form>
