<?php
if($this->viewer->getIdentity())
{
    ?>
    <div id="navigation">
        <a href="/" class="nav1"></a>
        <a href="#" class="nav2"></a>
        <a href="/messages/inbox" class="nav3"></a>
        <a href="#" class="nav4"></a>
        <a href="#" class="nav5"></a>
        <a href="/members/settings/general" class="nav6"></a>
    </div>
    <?
}
else
{
    ?>

    <?
}
?>
