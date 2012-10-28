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

  <?php foreach( $this->paginator as $user ): ?>
      <?php echo $this->htmlLink($user->getHref(), $this->itemPhoto($user, 'thumb.icon','absmiddle'), array('class' => 'newestmembers_thumb radius-border')) ?>
      <?php /*  echo $this->htmlLink($user->getHref(), $user->getTitle()) */ ?>
      <?php /* echo $this->timestamp($user->creation_date) */ ?>
  <?php endforeach; ?>
  <a class="show-all" href="#">Alle ›</a>