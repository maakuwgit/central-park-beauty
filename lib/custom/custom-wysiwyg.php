<?php

/**
 * Adds the custom formats button back into tinymce
 *
 * @param  array $buttons The available buttons
 * @return array          The buttons to display
 */
function ll_new_mce_button( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}

add_filter( 'mce_buttons_2', 'll_new_mce_button' );

/**
 * adds custom formats to the formats selection
 * on the tinymce editor
 *
 * @param  array $data Tinymce data
 * @return array       Tinyce data
 */
function ll_format_tinymce( $data ) {
    $style_formats = array(
      array(
        'title'     => 'Fonts',
        'items'     => [
          array(
            'title'    => 'Montserrat',
            'classes'  => 'sans-serif',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, time, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Libre Baskerville',
            'classes'  => 'serif',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, time, li',
            'wrapper'  => false
          )
        ]
      ),
      array(
        'title'     => 'Headings',
        'items'     => [
          array(
            'title'    => 'H1',
            'classes'  => 'h1',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'H2',
            'classes'  => 'h2',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'H3',
            'classes'  => 'h3',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'H4',
            'classes'  => 'h4',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'H5',
            'classes'  => 'h5',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'H6',
            'classes'  => 'h6',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
        ]
      ),
      array(
        'title' => 'Colors',
        'items' => array(
          array(
            'title'    => 'White',
            'classes'  => 'white',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd, address, code',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Silver',
            'classes'  => 'silver',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd, address, code',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Pink',
            'classes'  => 'pink',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd, address, code',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Grey',
            'classes'  => 'grey',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd, address, code',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Salmon',
            'classes'  => 'salmon',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd, address, code',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Peach',
            'classes'  => 'peach',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd, address, code',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Medium Grey',
            'classes'  => 'med-grey',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd, address, code',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Smoke',
            'classes'  => 'smoke',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd, address, code',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Black',
            'classes'  => 'black',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd, address, code',
            'wrapper'  => false
          ),
        )
      ),
      array(
        'title'     => 'Size',
        'items'     => [
          array(
            'title'    => 'Large',
            'classes'  => 'text-large',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Default',
            'classes'  => 'text-size-default',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Small',
            'classes'  => 'text-small',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
        ]
      ),
      array(
        'title'     => 'Spacing',
        'items'     => [
          array(
            'title'    => 'Letter Spacing',
            'classes'  => 'text-letter-spacing',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
        ]
      ),
      array(
        'title'    => 'Weight',
        'items'  => array(
          array(
            'title'    => 'Unstyled',
            'classes'  => '',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Light',
            'classes'  => 'text-light',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Normal',
            'classes'  => 'text-normal',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Semi-bold',
            'classes'  => 'text-semi',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Bold',
            'classes'  => 'text-bold',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Black',
            'classes'  => 'text-black',
            'selector' => 'h1, h2, h3, h4, h5, h6, p, a, span, li, time, dt, dd',
            'wrapper'  => false
          ),
        ),
      ),
      array(
        'title'     => 'Transform',
        'items'     => [
          array(
            'title'    => 'Uppercase',
            'classes'  => 'text-uppercase',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Lowercase',
            'classes'  => 'text-lowercase',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Default',
            'classes'  => 'text-transform-none',
            'selector' => 'h1, h2, h3, h4, h5, h6, a, p, span, li',
            'wrapper'  => false
          ),
        ],
      ),
      array(
        'title'     => 'Buttons',
        'items'     => [
          array(
            'title'    => 'Button',
            'classes'  => 'btn',
            'selector' => 'a',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Button (Dark)',
            'classes'  => 'btn btn__dark',
            'selector' => 'a',
            'wrapper'  => false
          ),
          array(
            'title'    => 'Button (Light)',
            'classes'  => 'btn btn__light',
            'selector' => 'a',
            'wrapper'  => false
          )
        ]
      )
    );

  $data['style_formats'] = json_encode( $style_formats );

  $custom_colours = '
        "000000", "Black",
        "4A4A4A", "Medium Grey",
        "646464", "Smoke",
        "646464", "Grey",
        "979797", "Silver",
        "E2A187", "Peach",
        "F0D0C3", "Salmon",
        "f7e7e1", "Pink",
        "ffffff", "White"
    ';

    // build colour grid default+custom colors
  $data['textcolor_map'] = '['.$custom_colours.']';

  return $data;
}

add_filter( 'tiny_mce_before_init', 'll_format_tinymce' );

//Used with ACF to simplify wysiwyg toolbar

// function my_toolbars( $toolbars ) {
//   // Uncomment to view format of $toolbars
//   // echo '<div class="postbox  acf-postbox" style="width: 75%; margin: 0 auto; padding: 20px;">';
//   //   var_dump( $toolbars['Full' ] );
//   // echo '</div>';

//   // Add a new toolbar called "Very Simple"
//   // - this toolbar has only 1 row of buttons
//   $toolbars['Very Simple' ] = array();
//   $toolbars['Very Simple' ][1] = array('formatselect','styleselect','bullist','numlist','bold', 'link', 'unlink','alignleft','aligncenter','alignright' );


//   // remove the 'Basic' toolbar completely
//   unset( $toolbars['Basic' ] );
//   unset( $toolbars['Full'] );

//   // return $toolbars - IMPORTANT!
//   return $toolbars;
// }

// add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );


/**
 * add visual button
 * for added tinymce plugins
 */
function add_tiny_mce_plugins_button( $buttons ) {
   array_push( $buttons, 'anchor' );
   return $buttons;
}
add_filter( 'mce_buttons', 'add_tiny_mce_plugins_button' );

/**
 * Add tinymce plugins assuming they live in
 * /lib/tinymce
 */
function add_tinymce_plugins( $plugins ) {
    $plugins['anchor'] = get_template_directory_uri() . '/lib/tinymce/anchor/plugin.min.js';
    return $plugins;
}
add_filter( 'mce_external_plugins', 'add_tinymce_plugins' );


/**
 * Allow custom classes to be applied to
 * WYSIWYG fields for editing editor.css
 */
/*
function ll_acf_admin_footer() {
  ?>
  <script>
    ( function( $) {
      acf.add_filter( 'wysiwyg_tinymce_settings', function( mceInit, id ) {
        // grab the classes defined within the field admin and put them in an array
        var classes   = $( '#' + mceInit.id ).closest( '.acf-field-wysiwyg' ).attr( 'class' ),
            classarray = classes.split(' ');
        var bodyclass = $(classarray).get(-1);

        mceInit.body_class += ' ' + bodyclass;
        return mceInit;
      });
    })( jQuery );
  </script>
<?php
}
add_action('acf/input/admin_footer', 'll_acf_admin_footer');
