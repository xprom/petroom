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

<table width="100%">
            <tr>
                <td width="25%">
                    <div><h2>Petroom ist social</h2></div>
                </td>
                <td width="25%">
                    <div><h2>&nbsp;</h2></div>
                </td>
                <td width="25%">
                    <div><h2>Direkt zu:</h2></div>
                </td>
                <td width="25%">
                    <div><h2>&nbsp;</h2></div>
                </td>
            </tr>
            <tr>
                <td class="border">
                    <div><a href="#" class="social facebook"><span></span>Petroom auf Facebook</a></div>
                </td>
                <td class="border">
                    <div><a href="#" class="social flick"><span></span>Petroom bei Flickr</a></div>
                </td>
                <td class="border">
                    <div><a href="#">Über uns</a></div>
                </td>
                <td class="border">
                    <div><a href="#">AGB</a></div>
                </td>
            </tr>
            <tr>
                <td class="border">
                    <div><a href="#" class="social twitter"><span></span>Petroom auf Twitter</a></div>
                </td>
                <td class="border">
                    <div><a href="#" class="social youtube"><span></span>Petroom-Channel auf YouTube</a></div>
                </td>
                <td class="border">
                    <div><a href="#">Werbung</a></div>
                </td>
                <td class="border">
                    <div><a href="#">Hilfe</a></div>
                </td>
            </tr>
            <tr>
                <td class="border">
                    <div><a href="#" class="social google"><span></span>Petroom bei Google+</a></div>
                </td>
                <td class="border">
                    <div><a href="#" class="social vimeo"><span></span>Petroom-Channel bei Vimeo</a></div>
                </td>
                <td class="border">
                    <div><a href="#">Datenschutz</a></div>
                </td>
                <td class="border">
                    <div><a href="#">Petroom für Unternehmen</a></div>
                </td>
            </tr>
            <tr>
                <td class="border">
                    <div><a href="#" class="social rss"><span></span>Nachrichten abonnieren</a></div>
                </td>
                <td class="border">
                    <div><a href="#" class="social paypal"><span></span>Petroom akzeptiert PayPal</a></div>
                </td>
                <td class="border">
                    <div><a href="#">Impressum</a></div>
                </td>
                <td class="border">
                    <div><a href="#">Ihr Feedback</a></div>
                </td>
            </tr>
            <tr>
                <td class="border border-last">
                    <div><br /></div>
                </td>
                <td class="border border-last">
                    <div><br /></div>
                </td>
                <td class="border border-last">
                    <div><br /></div>
                </td>
                <td class="border border-last">
                    <div><br /></div>
                </td>
            </tr>
        </table>
        <p class="copy">Petroom © 2012 · Deutsch · Vitali Tcherednitchenko · Liebevoll in Zürich entwickelt</p>


<?php if(0) { echo $this->translate('Copyright &copy;%s', date('Y')) ?>
<?php foreach( $this->navigation as $item ):
  $attribs = array_diff_key(array_filter($item->toArray()), array_flip(array(
    'reset_params', 'route', 'module', 'controller', 'action', 'type',
    'visible', 'label', 'href'
  )));
  ?>
  &nbsp;-&nbsp; <?php echo $this->htmlLink($item->getHref(), $this->translate($item->getLabel()), $attribs) ?>
<?php endforeach; ?>

<?php if( 1 !== count($this->languageNameList) ): ?>
    &nbsp;-&nbsp;
    <form method="post" action="<?php echo $this->url(array('controller' => 'utility', 'action' => 'locale'), 'default', true) ?>" style="display:inline-block">
      <?php $selectedLanguage = $this->translate()->getLocale() ?>
      <?php echo $this->formSelect('language', $selectedLanguage, array('onchange' => '$(this).getParent(\'form\').submit();'), $this->languageNameList) ?>
      <?php echo $this->formHidden('return', $this->url()) ?>
    </form>
<?php endif; ?>

<?php if( !empty($this->affiliateCode) ): ?>
  <div class="affiliate_banner">
    <?php
      echo $this->translate('Powered by %1$s',
        $this->htmlLink('http://www.socialengine.com/?source=v4&aff=' . urlencode($this->affiliateCode),
        $this->translate('SocialEngine Community Software'),
        array('target' => '_blank')))
    ?>
  </div>
<?php endif; } ?>
