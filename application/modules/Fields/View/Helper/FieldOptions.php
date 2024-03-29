<?php
/**
 * SocialEngine
 *
 * @category   Application_Core
 * @package    Fields
 * @copyright  Copyright 2006-2010 Webligo Developments
 * @license    http://www.socialengine.com/license/
 * @version    $Id: FieldOptions.php 9747 2012-07-26 02:08:08Z john $
 * @author     John
 */

/**
 * @category   Application_Core
 * @package    Fields
 * @copyright  Copyright 2006-2010 Webligo Developments
 * @license    http://www.socialengine.com/license/
 * @author     John
 */
class Fields_View_Helper_FieldOptions extends Fields_View_Helper_FieldAbstract
{
  public function fieldOptions($subject, $field, $value)
  {
    $info = Engine_Api::_()->fields()->getFieldInfo($field->type, 'multiOptions');

    // Single
    if( is_object($value) ) {
      if( isset($info[$value->value]) ) {
        $label =  $info[$value->value];
        return $this->encloseInLink($subject, $field, $value->value, $label);
      }
    }

    // Multi
    else if( is_array($value) ) {
      $first = true;
      $content = '';
      foreach( $value as $sVal ) {
        if( !isset($info[$sVal->value]) ) continue;
        if( !$first ) $content .= ', ';
        $first = false;

        $label = $info[$sVal->value];
        $content .= $this->encloseInLink($subject, $field, $sVal->value, $label);
      }
      return $content;
    }

    return '';
  }
}