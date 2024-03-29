<?php
/**
 * SocialEngine
 *
 * @category   Application_Core
 * @package    Core
 * @copyright  Copyright 2006-2010 Webligo Developments
 * @license    http://www.socialengine.com/license/
 * @version    $Id: index.tpl 9747 2012-07-26 02:08:08Z john $
 * @author     John
 */
?>

<div class="border-bottom">
    <table class="counter-table" width="100%">
        <tr>
            <td width="33%">
                <span><?php echo $this->locale()->toNumber($this->member_count); ?></span><br>
                <?php echo $this->translate(array('member', 'members', $this->member_count)) ?>
            </td>
            <td width="33%" class="middle">
                <span><?php echo $this->locale()->toNumber($this->friend_count) ?></span><br>
                <?php echo $this->translate(array('friendship', 'friendships', $this->friend_count)) ?>
            </td>
            <td width="34%">
                <span><?php echo $this->locale()->toNumber($this->post_count) ?></span>
                <?php echo $this->translate(array('post', 'posts', $this->post_count)) ?>
            </td>
        </tr>
    </table>
    </div>

<? /*
<ul>
  <?php if ($this->comment_count > 0): ?>
    <li>
      <span><?php echo $this->locale()->toNumber($this->comment_count) ?></span>
      <div><?php echo $this->translate(array('comment', 'comments', $this->comment_count)) ?></div>
    </li>
  <?php endif; ?>

  <?php if (is_array($this->hooked_stats) && !empty($this->hooked_stats)): ?>
  <?php foreach ($this->hooked_stats as $key => $value): ?>
    <?php if ($value > 0): ?>
      <li>
        <span><?php echo $this->locale()->toNumber($value) ?></span>
        <div><?php echo $this->translate(array($key, $key, $value)) ?></div>
      </li>
    <?php endif; ?>
  <?php endforeach; endif; ?>

</ul>*/
?>