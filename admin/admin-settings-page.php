<?php
// Settings page callback
function ntamas_cursor_settings_page()
{
?>
    <div class="wrap">
        <h1>Custom Cursor Follower Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('ntamas_cursor_settings_group');
            do_settings_sections('ntamas-cursor-settings');
            submit_button();
            ?>
        </form>
    </div>
<?php
}


// Fields for settings page
function ntamas_cursor_icon_field()
{
    $icon = get_option('ntamas_cursor_icon');
    $icons = [
        'fa fa-address-book',
        'fa fa-address-card',
        'fa fa-align-center',
        'fa fa-align-justify',
        'fa fa-align-left',
        'fa fa-align-right',
        'fa fa-ambulance',
        'fa fa-anchor',
        'fa fa-angle-double-down',
        'fa fa-angle-double-left',
        'fa fa-angle-double-right',
        'fa fa-angle-double-up',
        'fa fa-angle-down',
        'fa fa-angle-left',
        'fa fa-angle-right',
        'fa fa-angle-up',
        'fa fa-archive',
        'fa fa-arrow-circle-down',
        'fa fa-arrow-circle-left',
        'fa fa-arrow-circle-right',
        'fa fa-arrow-circle-up',
        'fa fa-arrow-down',
        'fa fa-arrow-left',
        'fa fa-arrow-right',
        'fa fa-arrow-up',
        'fa fa-arrows-alt',
        'fa fa-assistive-listening-systems',
        'fa fa-asterisk',
        'fa fa-at',
        'fa fa-audio-description',
        'fa fa-backward',
        'fa fa-balance-scale',
        'fa fa-ban',
        'fa fa-barcode',
        'fa fa-bars',
        'fa fa-bath',
        'fa fa-battery-empty',
        'fa fa-battery-full',
        'fa fa-battery-half',
        'fa fa-battery-quarter',
        'fa fa-battery-three-quarters',
        'fa fa-bed',
        'fa fa-beer',
        'fa fa-bell',
        'fa fa-bell-slash',
        'fa fa-bicycle',
        'fa fa-binoculars',
        'fa fa-birthday-cake',
        'fa fa-blind',
        'fa fa-bold',
        'fa fa-bolt',
        'fa fa-bomb',
        'fa fa-book',
        'fa fa-bookmark',
        'fa fa-braille',
        'fa fa-briefcase',
        'fa fa-bug',
        'fa fa-building',
        'fa fa-bullhorn',
        'fa fa-bullseye',
        'fa fa-bus',
        'fa fa-calculator',
        'fa fa-calendar',
        'fa fa-camera',
        'fa fa-camera-retro',
        'fa fa-car',
        'fa fa-caret-down',
        'fa fa-caret-left',
        'fa fa-caret-right',
        'fa fa-caret-up',
        'fa fa-cart-arrow-down',
        'fa fa-cart-plus',
        'fa fa-certificate',
        'fa fa-check',
        'fa fa-check-circle',
        'fa fa-check-square',
        'fa fa-child',
        'fa fa-circle',
        'fa fa-clipboard',
        'fa fa-clone',
        'fa fa-cloud',
        'fa fa-cloud-download',
        'fa fa-cloud-upload',
        'fa fa-code',
        'fa fa-code-fork',
        'fa fa-coffee',
        'fa fa-cog',
        'fa fa-cogs',
        'fa fa-columns',
        'fa fa-comment',
        'fa fa-commenting',
        'fa fa-comments',
        'fa fa-compass',
        'fa fa-copyright',
        'fa fa-credit-card',
        'fa fa-crop',
        'fa fa-crosshairs',
        'fa fa-cube',
        'fa fa-cubes',
        'fa fa-cutlery',
        'fa fa-database',
        'fa fa-deaf',
        'fa fa-desktop',
        'fa fa-diamond',
        'fa fa-download',
        'fa fa-edit',
        'fa fa-eject',
        'fa fa-ellipsis-h',
        'fa fa-ellipsis-v',
        'fa fa-envelope',
        'fa fa-envelope-open',
        'fa fa-envelope-square',
        'fa fa-eraser',
        'fa fa-exchange',
        'fa fa-exclamation',
        'fa fa-exclamation-circle',
        'fa fa-exclamation-triangle',
        'fa fa-external-link',
        'fa fa-external-link-square',
        'fa fa-eye',
        'fa fa-eye-slash',
        'fa fa-fax',
        'fa fa-female',
        'fa fa-fighter-jet',
        'fa fa-file',
        'fa fa-film',
        'fa fa-filter',
        'fa fa-fire',
        'fa fa-fire-extinguisher',
        'fa fa-flag',
        'fa fa-flag-checkered',
        'fa fa-flask',
        'fa fa-folder',
        'fa fa-folder-open',
        'fa fa-gamepad',
        'fa fa-gavel',
        'fa fa-genderless',
        'fa fa-gift',
        'fa fa-glass',
        'fa fa-globe',
        'fa fa-graduation-cap',
        'fa fa-hand-point-right',
        'fa fa-hand-point-up',
        'fa fa-hashtag',
        'fa fa-headphones',
        'fa fa-heart',
        'fa fa-heartbeat',
        'fa fa-history',
        'fa fa-home',
        'fa fa-hourglass',
        'fa fa-hourglass-end',
        'fa fa-hourglass-half',
        'fa fa-hourglass-start',
        'fa fa-i-cursor',
        'fa fa-id-badge',
        'fa fa-id-card',
        'fa fa-image',
        'fa fa-inbox',
        'fa fa-indent',
        'fa fa-industry',
        'fa fa-info',
        'fa fa-info-circle',
        'fa fa-key',
        'fa fa-language',
        'fa fa-laptop',
        'fa fa-leaf',
        'fa fa-level-down',
        'fa fa-level-up',
        'fa fa-life-ring',
        'fa fa-line-chart',
        'fa fa-link',
        'fa fa-location-arrow',
        'fa fa-lock',
        'fa fa-low-vision',
        'fa fa-magic',
        'fa fa-magnet',
        'fa fa-male',
        'fa fa-map',
        'fa fa-map-marker',
        'fa fa-map-signs',
        'fa fa-mars',
        'fa fa-medkit',
        'fa fa-mercury',
        'fa fa-microphone',
        'fa fa-microphone-slash',
        'fa fa-minus',
        'fa fa-minus-circle',
        'fa fa-minus-square',
        'fa fa-mobile',
        'fa fa-motorcycle',
        'fa fa-mouse-pointer',
        'fa fa-music',
        'fa fa-neuter',
        'fa fa-object-group',
        'fa fa-object-ungroup',
        'fa fa-outdent',
        'fa fa-paint-brush',
        'fa fa-paper-plane',
        'fa fa-pause',
        'fa fa-paw',
        'fa fa-pencil',
        'fa fa-pencil-square',
        'fa fa-percent',
        'fa fa-phone',
        'fa fa-phone-square',
        'fa fa-pie-chart',
        'fa fa-plane',
        'fa fa-plug',
        'fa fa-plus',
        'fa fa-plus-circle',
        'fa fa-plus-square',
        'fa fa-podcast',
        'fa fa-power-off',
        'fa fa-print',
        'fa fa-puzzle-piece',
        'fa fa-qrcode',
        'fa fa-question',
        'fa fa-question-circle',
        'fa fa-quote-left',
        'fa fa-quote-right',
        'fa fa-random',
        'fa fa-recycle',
        'fa fa-refresh',
        'fa fa-registered',
        'fa fa-reply',
        'fa fa-reply-all',
        'fa fa-retweet',
        'fa fa-road',
        'fa fa-rocket',
        'fa fa-rss',
        'fa fa-search',
        'fa fa-search-minus',
        'fa fa-search-plus',
        'fa fa-server',
        'fa fa-share',
        'fa fa-share-square',
        'fa fa-shield',
        'fa fa-ship',
        'fa fa-shopping-cart',
        'fa fa-sign-in',
        'fa fa-sign-language',
        'fa fa-sign-out',
        'fa fa-signal',
        'fa fa-sitemap',
        'fa fa-sliders',
        'fa fa-sort',
        'fa fa-space-shuttle',
        'fa fa-spinner',
        'fa fa-square',
        'fa fa-star',
        'fa fa-star-half',
        'fa fa-sticky-note',
        'fa fa-street-view',
        'fa fa-suitcase',
        'fa fa-table',
        'fa fa-tablet',
        'fa fa-tachometer',
        'fa fa-tag',
        'fa fa-tags',
        'fa fa-tasks',
        'fa fa-taxi',
        'fa fa-television',
        'fa fa-terminal',
        'fa fa-thermometer-empty',
        'fa fa-thermometer-full',
        'fa fa-thermometer-half',
        'fa fa-thumbs-down',
        'fa fa-thumbs-up',
        'fa fa-ticket',
        'fa fa-times',
        'fa fa-times-circle',
        'fa fa-tint',
        'fa fa-toggle-off',
        'fa fa-toggle-on',
        'fa fa-trademark',
        'fa fa-train',
        'fa fa-transgender',
        'fa fa-trash',
        'fa fa-tree',
        'fa fa-trophy',
        'fa fa-truck',
        'fa fa-tty',
        'fa fa-tv',
        'fa fa-umbrella',
        'fa fa-university',
        'fa fa-unlock',
        'fa fa-upload',
        'fa fa-user',
        'fa fa-user-plus',
        'fa fa-user-secret',
        'fa fa-user-times',
        'fa fa-users',
        'fa fa-video-camera',
        'fa fa-volume-down',
        'fa fa-volume-off',
        'fa fa-volume-up',
        'fa fa-wheelchair',
        'fa fa-wifi',
        'fa fa-wrench'


    ];

    echo "<div class='ntamas-cursor-select-container'>
            <div class='custom-select'>
                <div class='selected'>
                    <i class='fa fa-star'></i> 
                    Select an option
                </div>
                <div class='search-box'>
                    <input type=;text' placeholder='Search...'>
                </div>
                <ul class='options'>";
    foreach ($icons as $available_icon) {
        $selected = ($icon === $available_icon) ? 'selected' : '';
        echo "<li><i class='" . esc_attr($available_icon) . "'></i>" . esc_html($available_icon) . "</li>";
    }
    echo "</ul></div></div>";
    echo "<select id='ntamas_cursor_select' name='ntamas_cursor_icon'>";
    foreach ($icons as $available_icon) {
        $selected = ($icon === $available_icon) ? 'selected' : '';
        echo "<option value='" . esc_attr($available_icon) . "' $selected>" . esc_html($available_icon) . "</option>";
    }
    echo "</select>";
}

function ntamas_cursor_size_field()
{
    $size = get_option('ntamas_cursor_size');
    echo "<input type='number' name='ntamas_cursor_size' value='" . esc_attr($size) . "' min='1' max='100'/>";
}

function ntamas_cursor_position_x_field()
{
    $position_x = get_option('ntamas_cursor_position_x');
    echo "<input type='number' name='ntamas_cursor_position_x' value='" . esc_attr($position_x) . "' min='0' max='100'/>";
}

function ntamas_cursor_position_y_field()
{
    $position_y = get_option('ntamas_cursor_position_y');
    echo "<input type='number' name='ntamas_cursor_position_y' value='" . esc_attr($position_y) . "' min='0' max='100'/>";
}

function ntamas_cursor_speed_field()
{
    $speed = get_option('ntamas_cursor_speed');
    echo "<input type='number' name='ntamas_cursor_speed' value='" . esc_attr($speed) . "' min='1' max='100'/>";
}
