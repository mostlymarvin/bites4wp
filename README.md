# Bites4WP - A Book+Main Bites Profile Link Plugin for WordPress

- [Read Directions, Instructions, and Cautionary Tales](http://bites4wp.memphismckay.com)

## Setup:
Under Book+Main Bites in the customizer:
   - **Profile Settings**: enter the username of the Book+Main Bites Profile you would like to link to
   - **Style Options**: choose colors, backgrounds, borders, and typography for the icons (these options apply to both the floating icon and the widget icon. If you need to style them separately, you can use the custom css box to add additional styles as needed.)
   - **Display Options**: applies to floating icon only. Choose to display on all pages, home page only, or hide completely.
      -- If set to show on home or all, choose the position of the icon on the desktop (defaults to the right side of your screen in the center), along with the position on mobile (defaults to the bottom of the page).


## Shortcode:
```
[bites_link username='' text='' align='']
```
- **username** defaults to the username entered into customizer (above), but if you'd like to display a link elsewhere, add the username here
- **text** defaults to "Follow me on Book+Main Bites", but can be customized.
- **align** defaults to center, but can be set "left", "right", or "none" ( similar to image alignment )
- **class** defaults to empty, but a custom css class can be added if needed

you can also use the shortcode in a theme template: 
``` 
if( shortcode_exists('bites_link' ) ) {
    echo do_shortcode('[bites_link'] );
    }
```


### Questions?
[Contact Me Here](https://memphismckay.com/contact) - I'll do my best to help, if I can. In your message, please try to be as _specific as possible_ about the issue you are experiencing, and if possible, include a link to your website. **Please note that while I hope this plugin will be useful to you, I cannot guarantee this plugin will be error free, will work with all themes, or that it will never burn your toast or curse in front of your children, though I've tried to teach it better manners than that.**



### License: GPL-2.0+
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,but WITHOUT ANY WARRANTY without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the [GNU General Public License](https://www.gnu.org/licenses/gpl-2.0.html) for more details.
 
You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 


