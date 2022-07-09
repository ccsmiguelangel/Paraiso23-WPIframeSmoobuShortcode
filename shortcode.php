<?php

// This function shows deppend the content required
function p23_showIframeResult(
  // Shows All Apartment
  $p23_divId = 'apartmentIframeAll', 
  $p23_url = 'https://login.smoobu.com/es/booking-tool/iframe/264141'
){
  // Clean Output
  ob_start();
  ?>
    <div id="<?php echo $p23_divId; //add id ?>">
      <script type="text/javascript" src="https://login.smoobu.com/js/Settings/BookingToolIframe.js"></script>
      <script>
        BookingToolIframe.initialize({
          "url": "<?php echo $p23_url; //add url ?>",
          "baseUrl": "https://login.smoobu.com",
          "target": "#<?php echo $p23_divId; //add id ?>"
        })
      </script>
    </div>
  <?php
    $p23_output = ob_get_clean();
  
    return $p23_output;
}

// Shortcode Add Iframe
function p23_iframe_smoobu_shortcode($atts) {
  if (!empty($atts['id'])){

    // Shows custom apartment 
    $p23_atts = shortcode_atts(['id' => '',], $atts);
    $p23_divId = 'apartmentIframe'.$p23_atts['id'];
    $p23_url='https://login.smoobu.com/es/booking-tool/iframe/264141/'.$p23_atts['id'];
    
    return p23_showIframeResult($p23_divId, $p23_url);
   
  }
  // Show all
  return p23_showIframeResult();
}
add_shortcode('iframe_smoobu_shortcode', 'p23_iframe_smoobu_shortcode');
