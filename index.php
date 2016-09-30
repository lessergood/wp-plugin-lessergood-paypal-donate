<?php 
/**
 * Plugin Name: Lesser Good Paypal Donate
 * Plugin URI: http://lessergood.org
 * Description: adds paypal donation one-time and recurring shortcodes
 * Version: 1.0.0
 * Author: Ryan Carter
 * Author URI: http://lessergood.org
 * License: GPL2
 */
function lg_donate_once($atts, $content=null){
$email = $atts['email'];
$item_name = $atts['name'] ? $atts['name'] : 'One-Time Donation';
$html = '<form class="lg-donate-form lg-donate-once" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
  <input type="hidden" style="height: 0px;" name="cmd" value="_donations" />
  <input type="hidden" style="height: 0px;" name="charset" value="utf-8" />
  <input type="hidden" style="height: 0px;" name="business" value="'.$email.'" />
  <input type="hidden" style="height: 0px;" name="no_note" value="1" />
  <input type="hidden" style="height: 0px;" name="no_shipping" value="1" />
  <input type="hidden" style="height: 0px;" name="src" value="0" />
  <input type="hidden" style="height: 0px;" name="item_name" value="'.$item_name.'" />
  <h3 class="lg-donate-title">Make a One-Time Donation:</h3>
  <input type="text" name="amount" value="" class="lg-donate-amount" placeholder="$ - One-Time Amount" />
  <button type="submit" class="lg-donate-button lg-donate-button-once">Donate One-Time</button>
  <br /><small>Paypal account NOT required.</small>
</form>';
return $html;
}
add_shortcode('lg-donate-once', 'lg_donate_once');

function lg_donate_monthly($atts, $content=null){
$email = $atts['email'];
$item_name = $atts['name'] ? $atts['name'] : 'Monthly Donation';
$html = '<form class="lg-donate-form lg-donate-monthly" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
  <input type="hidden" style="height: 0px;" name="cmd" value="_xclick-subscriptions" />
  <input type="hidden" style="height: 0px;" name="charset" value="utf-8" />
  <input type="hidden" style="height: 0px;" name="business" value="'.$email.'" />
  <input type="hidden" style="height: 0px;" name="t3" value="M" />
  <input type="hidden" style="height: 0px;" name="p3" value="1" />
  <input type="hidden" style="height: 0px;" name="no_note" value="1" />
  <input type="hidden" style="height: 0px;" name="src" value="1" />
  <input type="hidden" style="height: 0px;" name="item_name" value="'.$item_name.'" />
  <h3 class="lg-donate-title">Make a Monthly Donation:</h3>
  <input type="text" name="a3" value="" class="lg-donate-amount" placeholder="$ - Monthly Amount" />
  <button type="submit" class="lg-donate-button lg-donate-button-monthly">Donate Monthly</button>
  <br /><small>Paypal account required for monthly donations.</small>
</form>';
return $html;
}
add_shortcode('lg-donate-monthly', 'lg_donate_monthly');

function lg_donate_yearly($atts, $content=null){
$email = $atts['email'];
$item_name = $atts['name'] ? $atts['name'] : 'Annual Donation';
$html = '<form class="lg-donate-form lg-donate-yearly" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
  <input type="hidden" style="height: 0px;" name="cmd" value="_xclick-subscriptions" />
  <input type="hidden" style="height: 0px;" name="charset" value="utf-8" />
  <input type="hidden" style="height: 0px;" name="business" value="'.$email.'" />
  <input type="hidden" style="height: 0px;" name="t3" value="Y" />
  <input type="hidden" style="height: 0px;" name="p3" value="1" />
  <input type="hidden" style="height: 0px;" name="no_note" value="1" />
  <input type="hidden" style="height: 0px;" name="src" value="1" />
  <input type="hidden" style="height: 0px;" name="item_name" value="'.$item_name.'" />
  <h3 class="lg-donate-title">Make a Yearly Donation:</h3>
  <input type="text" name="a3" value="" class="lg-donate-amount" placeholder="$ - Annually Amount" />
  <button type="submit" class="lg-donate-button lg-donate-button-monthly">Donate Annually</button>
  <br /><small>Paypal account required for yearly donations.</small>
</form>';
return $html;
}
add_shortcode('lg-donate-yearly', 'lg_donate_yearly');
