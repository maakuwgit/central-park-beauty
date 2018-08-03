<?php
/**
* filters
* -----------------------------------------------------------------------------
*
* filters component
*/

$defaults = [
  'taxonomy' => false
];

$component_data = ll_parse_args( $component_data, $defaults );
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

$component_id   = uniqid('filters-');
$tax            = $component_data['taxonomy'];
$terms          = get_terms( $tax );
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<aside class="row start ll-filters<?php echo implode( " ", $classes ); ?>"<?php echo ( $component_id ? ' id="'.$component_id.'"' : '' ) ?> data-component="filters">

  <form class="card-grid__form col col-offset-lg-1of12 col-lg-3of12" action="./">

    <label for="<?php echo $id; ?>" class="card-grid__select__label">Filters</label>

    <select class="card-grid__select" id="<?php echo $id; ?>">
    <?php

      if ($terms) :
    ?>

    <?php foreach( $terms as $filter ) : ?>

      <option value="<?php echo $filter->slug; ?>"><?php echo $filter->name; ?></option>

    <?php endforeach; ?>

  <?php endif; ?>

    </select>
    <!-- .card-grid__select -->

  </form>
  <!-- .card-grid__form col col-offset-lg-1of12 col-lg-3of12 -->

</aside>
