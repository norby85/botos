<?php
dpm($content);
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php print $user_picture; ?>

    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
        <div class="submitted">
            <?php print $submitted; ?>
        </div>
    <?php endif; ?>
    <div class="content"<?php print $content_attributes; ?>>
        <?php
        // We hide the comments and links now so that we can render them later.
        $node_number = $content['field_product_reference']['#items'][0]['target_id'];
        hide($content['comments']);
        hide($content['links']);
        hide($content['body']);
        hide($content['field_kategorija']);
        hide($content['field_product_reference'][0]['commerce_product'][$node_number]['commerce_price']);
        hide($content['field_product_reference'][0]['commerce_product'][$node_number]['field_slika_proizvoda']);
        hide($content['field_product_reference'][0]['commerce_product'][$node_number]['field_kod_proizvoda']);
        hide($content['field_product_reference'][0]['commerce_product'][$node_number]['field_cene_preko_telefona']);
        hide($content['field_product_reference'][0]['commerce_product'][$node_number]['field_ruski_kod']);
        hide($content['field_product_reference'][0]['commerce_product'][$node_number]['sku']);

        ?><div class="image-container">
            <?php
            print render($content['field_product_reference'][0]['commerce_product'][$node_number]['field_slika_proizvoda']);
            ?>
        </div>

        <div class="body-container">
            <?php
            print render($content['field_product_reference'][0]['commerce_product'][$node_number]['sku']);
            print render($content['field_product_reference'][0]['commerce_product'][$node_number]['field_kod_proizvoda']);
            print render($content['field_product_reference'][0]['commerce_product'][$node_number]['field_ruski_kod']);
            print render($content['body']);
            print render($content['field_product_reference'][0]['commerce_product'][$node_number]['commerce_price']);
            print render($content['field_product_reference'][0]['commerce_product'][$node_number]['field_cene_preko_telefona']);
            print render($content['field_kategorija']);
            ?>
        </div>
        <?php
        /*print render($content['add_to_cart']);
        print render($content['body']);*/

        print render($content);
        ?>
    </div>

    <?php
    ?>

    <?php print render($content['links']); ?>

    <?php print render($content['comments']); ?>

</div>
