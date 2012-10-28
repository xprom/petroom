<?php
/**
 * SocialEngine
 *
 * @category   Application_Core
 * @package    User
 * @copyright  Copyright 2006-2010 Webligo Developments
 * @license    http://www.socialengine.com/license/
 * @version    $Id: index.tpl 9747 2012-07-26 02:08:08Z john $
 * @author     John
 */
?>

<div class="quicklinks border-bottom">
  <?php // This is rendered by application/modules/core/views/scripts/_navIcons.tpl
    echo $this->navigation()
      ->menu()
      ->setContainer($this->navigation)
      ->setPartial(array('_navIcons.tpl', 'core'))
      ->render()
  ?>
</div>

<div class="border-bottom ads">
    <a><b>Innovative Weiterbildung</b></a><br>
    <b><span>hslu.ch/weiterbildung</span></b>
    <img src="/application/themes/clean/images/left-ads.png">
    Machen Sie mehr aus sich.
    Mit einer Weiterbildung an
    der Hochschule Luzern. Jetzt
    Info-Unterlagen bestellen!
</div>