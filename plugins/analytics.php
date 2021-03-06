<?php

/*
*  A Google Analytics plugin for Rat by @DHS
*
*  Installation
*
*    Comes installed by default
*
*  Usage
*
*    To include Google Analytics tracking code:
*
*      if (isset($this->plugins->analytics)) {
*        echo $this->plugins->analytics->show();
*      }
*
*/

class analytics extends Application {

  function __construct($analytics_id) {

    $this->analytics_id = $analytics_id;

  }

  function view() {

    if ($this->analytics_id != NULL && SITE_IDENTIFIER == 'live') {

      return <<<HTML
<script>
  var _gaq=[['_setAccount','{$this->analytics_id}'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

HTML;

    } else {

      return NULL;

    }

  }

}
