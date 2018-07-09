<?php
/**
* split heading
* -----------------------------------------------------------------------------
*
* split heading component
*/

$defaults = [
  'split_title' => null,
  'content' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$split_title = $component_data['split_title'];
$content = $component_data['content'];

?>

<?php
/**
 * Any additional classes to apply to the main component container.
 *
 * @var array
 * @see args['classes']
 */
$classes        = $component_args['classes'] ?: array();

/**
 * ID to apply to the main component container.
 *
 * @var array
 * @see args['id']
 */
$component_id   = $component_args['id'];
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-split-heading <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="split-heading">

  <div class="container">


      <div class="cp-sh__top-title">
        <span class="cp-sh__top"><?php echo $split_title['top']; ?></span>
      </div>

      <div class="cp-sh__row">
        <div class="cp-sh__bottom-title">
          <span class="cp-sh__bottom"><?php echo $split_title['bottom']; ?></span>
        </div>

        <div class="cp-sh__content">
          <h3 class="cp-sh__title"><?php echo $content['title']; ?></h3>
          <?php echo $content['body']; ?>
        </div>
      </div>

  </div>

</div>
