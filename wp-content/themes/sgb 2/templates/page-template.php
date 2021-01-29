<?php
if (have_rows('template_blocks')):
    while (have_rows('template_blocks')): the_row();
        if (get_row_layout() == 'hero') {
            echo get_template_part('templates/hero/hero');
        } else if (get_row_layout() == 'commercial_services') {
        echo get_template_part('templates/commercial-service/comm-service');
    } else if (get_row_layout() == 'icons_and_text') {
    echo get_template_part('templates/icon-and-text/icontxt');
} else if (get_row_layout() == 'image_and_text') {
    echo get_template_part('templates/image-and-text/imgtxt');
} else if (get_row_layout() == 'background_image_text') {
    echo get_template_part('templates/background-image-text/bgtext');
} elseif (get_row_layout() == 'client_logos') {
    echo get_template_part('templates/clients-logo/logo');
}
endwhile;
endif;
