<?php

$this->loadPartial('header');

echo '<div class="row">
  <div class="span12 columns offset2">';

$this->loadView('admin/menu');

include "themes/{$this->config->theme}/$view.php";

echo '  </div>
</div>';

$this->loadPartial('footer');

?>