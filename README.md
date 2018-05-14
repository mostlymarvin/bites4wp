# Bites4WP - A Book+Main Bites Profile Link Plugin for WordPress


### Read Directions, Instructions, and Cautionary Tales:  
http://bites4wp.memphismckay.com


### Install
- [Download zip file](https://github.com/mostlymarvin/bites4wp/archive/master.zip)
- In your WordPress dashboard, go to **Plugins** and **Add New**
- Upload zip file
- Activate

### Configure
Open the Customizer Panel (accessible from the Admin Dashboard under **Appearance -> Customize** OR from the **Customizer** link in the admin bar at the top of the site), then click on **Book+Main**.

- **Profile Settings** 
    - Add your Book+Main username 
- **Style Options**
    - Set your design preferences. These apply to both the shortcode and to the floating icon. (Typography preferences only apply to the shortcode)
- **Display Options**
    - Choose whether you'd like the floating icon to display everywhere, on home only, or disable the floating icon entirely.
    - Choose the position the icon will have on desktop browser windows
    - Choose the position the icon will have on smaller screens

### Shortcode Use
To display the Book+Main Bites link in a page, post, or (if your theme allows) a widget, use the shortcode `[bites_link]`.


#### Shortcode Parameters:
- **username** : by default, the username you specified in the customizer will be used, but if you'd like to link to another profile, you can add it to the shortcode parameters.  
- **text** : default text is "follow me on book+main bites". To change this, add a "text" parameter to your shortcode.
- **align** : by default, the shortcode link will be centered. Just like WordPress images, though, you may also set this parameter to "left", "right", or "none". 
- **class** : should you need to add an additional css class to the shortcode, you can add a class (or space-separated classes) to this parameter.

     
#### Using the Shortcode in Template Files:
```
if( shortcode_exists('bites_link' ) ) {
   echo do_shortcode('[bites_link'] );
   }
```

#### Shortcode Examples

``` 
[bites_link username="janefonda"]
```

```    
[bites_link text="come hang out with me at book+main!"]
```

```
[bites_link class="class1 class2"]
```

```
[bites_link align="left"]
```


### Updates
Periodically, you may see update notifications. It is always a best practice to make sure you keep your plugins up to date.


### Support & Questions
Questions? [Contact Me Here](/contact) - I'll do my best to help, if I can. In your message, please include a link to your website, and try to be as specific as possible about the issue you are experiencing.

Memphis McKay, LLC distributes Bites4WP and other plugins "as is" and with no guarantee, explicit or implied, that they will function exactly as you would like, or that they will be compatible with all third-party components and plugins. We have seen no evidence that this or any other of our plugins can do laundry or provide adequete child supervision, so we do not recommend them for these uses.

While it is our intent to provide the speediest and best support possible for our product(s), we do not guarantee that any particular support query can or will be answered to the satisfaction of the inquirer, nor do we guarantee a response within any specific timeframe. Support is provided at the sole discretion of Memphis McKay, LLC.


### Warranty
Please note that while we hope this plugin will be useful to you, we cannot guarantee this plugin will always be error free, will work with all themes, will work on all devices, or that it will never burn your toast or curse in front of your children, though we've tried to teach it better manners than that.

Plugins sold and / or distributed by Memphis McKay, LLC are done so in the hope that they will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

Because the number and variety of plugins is vast and wide, we do not guarantee that the plugin will function with all third-party plugins, themes or browsers of any kind. We do not assume responsibility and will not be held responsible for any conflicts or compatibility issues that may occur due to third-party software. We assume no responsibility for any data loss as a result of installing or using Bites4WP. Should conflicts occur with third-party software, we may provide support at our discretion.


### License: GPL-2.0+
Bites4WP (c) 2018 Memphis McKay

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA 

GNU General Public License is available online, [here](https://www.gnu.org/licenses/gpl.html)


### Terms of Use Agreement 
By downloading and /or using this plugin, you are you indicate and consent that you have read and agree to the [Terms & Conditions](http://bites4wp.memphismckay.com/terms/) listed and detailed on our website, here: http://bites4wp.memphismckay.com/terms/.  We reserve the right to change or modify the current Terms and Conditions without prior notice or consent.


### Privacy Policy
We like our privacy. We think your privacy is important, too. You can read our full [Privacy Policy](https://www.iubenda.com/privacy-policy/35861641) here: https://www.iubenda.com/privacy-policy/35861641

