# Lesser Good Paypal Donation (with Recurring)
adds paypal donation one-time and recurring shortcodes for WordPress

##Important Note:
Paypal Account required to use this plugin (and have it work correctly). 

##Non-Profit Note:
If you do not have a 501(c)(3) confirmed PayPal account, donations can still be made, but they will not be tax-deductible for donors.

##Plugin Usage

1. Download and activate the plugin
2. Add shortcode to your page, post, or wherever your theme allows
3. Required: Add your paypal email (the one you sign-into paypal with) to the shortcode as an attribute, like this:

    One-Time Donation Example:
    
    ```
    [lg-donate-once email=mypaypalemail@myemail.com]
    ```
    
    Monthly Donation Example:
    
    ```
    [lg-donate-monthly email=mypaypalemail@myemail.com]
    ```
4. Optional: Add the name of the donation item that will show up on Paypal for donors:
    
    One-Time Donation Example:
    
    ```
    [lg-donate-once email=mypaypalemail@myemail.com name='My Charitable Fund']
    ```
    
    Monthly Donation Example:
    
    ```
    [lg-donate-monthly email=mypaypalemail@myemail.com name='My Charitable Fund']
    ```
