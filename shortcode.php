<?php

function p23_iframe_smoobu_shortcode() {
  ob_start();
?>
  <div id="apartmentIframeAll">
    <script type="text/javascript" src="https://login.smoobu.com/js/Settings/BookingToolIframe.js"></script>
    <script>
      BookingToolIframe.initialize({
        "url": "https://login.smoobu.com/es/booking-tool/iframe/264141",
        "baseUrl": "https://login.smoobu.com",
        "target": "#apartmentIframeAll"
      })
    </script>
  </div>
<?php

  $p23_output = ob_get_clean();

  return $p23_output;
}
add_shortcode('iframe_smoobu_shortcode', 'p23_iframe_smoobu_shortcode');
