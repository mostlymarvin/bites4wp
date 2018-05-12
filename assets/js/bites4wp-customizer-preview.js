/**
 * Bites4WP Customizer Preview
 *
 * @author Memphis McKay
 * @package Bites4WP 
 * @since 1.0 .0
 *
 */

( function( $ ) {

  var $background;
  var $color;
  var $position;
  var $border;
  var $border_color;
  

  // Preview the Bites Icon Background Color
  wp.customize( 'bites4wp[color_button_background]', function( value ) {
    value.bind( function( newval ) {
     $background = newval;
      $('.biteslink-profile-link a').css({
        'background-color' : newval
        
         });
    });
  });

  // Preview the Bites Icon Color
  wp.customize( 'bites4wp[color_button_text_color]', function( value ) {
    value.bind( function( newval ) {
      $color = newval;
      $('.biteslink-profile-link a #bites-logo').css({
        'fill' : newval
         });
      $('.biteslink-profile-link a span').css({
        'color': newval 
      });
    });
  });
  

  //Hover?
  wp.customize( 'bites4wp[color_button_hover_background]', function( value ) {
    value.bind( function( newval ) {
      $('.biteslink-profile-link a').hover(function () {
        $(this).css({
        'background-color' : newval
         });
        }, function() {
        $(this).css({
        'background-color' : $background
         });
      });
    } );
  } );

  // Preview the MBT Button Text Color
  wp.customize( 'bites4wp[color_button_hover_text_color]', function( value ) {
    value.bind( function( newval ) {
      $('.biteslink-profile-link a').hover(function () {
        $('#bites-logo', this).css({
          'fill' : newval
           });
        $('span', this).css({
          'color': newval
        });
      }, function() {
        $('#bites-logo', this).css({
          'fill' : $color
           });
        $('span', this).css({
          'color': $color
        });
        });
      } );
  } );

 
  // Preview the MBT Button Border Radius
  wp.customize( 'bites4wp[color_border_radius]', function( value ) {
    value.bind( function( newval ) {
      $('.biteslink-profile-link a').css({
        'border-radius' : newval + 'px'
         });
    } );
  } );

  // Preview the Bites border
  wp.customize('bites4wp[border_color]', function (value) {
    value.bind(function (newval) {
      $border_color = newval;
      $('.biteslink-profile-link a').css({
        'border-color': newval
      });
    });
  });

  wp.customize('bites4wp[border_hover_color]', function (value) {
    value.bind(function (newval) {
      $('.biteslink-profile-link a').hover(function () {
        $(this).css({
          'border-color': newval
        });
      }, function () {
        $(this).css({
          'border-color': $border_color
        });
      });
    });
  });

  //bites4wp_color_grayscale_button
  wp.customize( 'bites4wp[border_button]', function( value ) {
    value.bind( function( newval ) {
      
      if (newval === true) {
        $('.biteslink-profile-link a').css({
          'border-width' : '2px',
          'border-style' : 'solid',
          'border-color' : $border_color
         });
      } else {
        $('.biteslink-profile-link a').css({
           'border-width': '0',
           'border-style': 'solid',
           'border-color': $border_color
         });
      }
    } );
  } );

  

  //bites4wp_grayscale
  wp.customize('bites4wp[color_grayscale_button]', function (value) {
    value.bind(function (newval) {

      if (newval === true) {
        $('.biteslink-profile-link a').css({
          '-webkit-filter': 'grayscale(100%)',
          'filter': 'grayscale(100%)'
        });
        $('.biteslink-profile-link a').hover(function () {
          $(this).css({
            '-webkit-filter': 'grayscale(0%)',
            'filter': 'grayscale(0%)'
          });
        }, function () {
          $(this).css({
            '-webkit-filter': 'grayscale(100%)',
            'filter': 'grayscale(100%)'
          });
        });
      } else {
        $('.biteslink-profile-link a').css({
          '-webkit-filter': 'grayscale(0%)',
          'filter': 'grayscale(0%)'
        });

      }
    });
  });

  // Preview the Bites Shortcode Font Weight
  wp.customize('bites4wp[fontweight]', function (value) {
    value.bind(function (newval) {
      $('.biteslink-profile-link a span').css({
        'font-weight': newval

      });
    });
  });

  // Preview the Bites Shortcode Font Weight
  wp.customize('bites4wp[fontstyle]', function (value) {
    value.bind(function (newval) {
      $('.biteslink-profile-link a span').css({
        'font-style': newval
      });
    });
  });

  // Preview the Bites Shortcode Letter Spacing
  wp.customize('bites4wp[letterspacing]', function (value) {
    value.bind(function (newval) {
      $('.biteslink-profile-link a span').css({
        'letter-spacing': newval + 'px'

      });
    });
  });

  // Preview the Bites Shortcode Letter Spacing
  wp.customize('bites4wp[fontsize]', function (value) {
    value.bind(function (newval) {
      $('.biteslink-profile-link a span').css({
        'font-size': newval + 'px'

      });
    });
  });

  // Preview the Bites Shortcode Text Transform
  wp.customize('bites4wp[texttransform]', function (value) {
    value.bind(function (newval) {
      $('.biteslink-profile-link a span').css({
        'text-transform': newval 

      });
    });
  });

} )( jQuery );
