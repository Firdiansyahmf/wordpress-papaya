<?php
// Register Block Category
function gradiant_block_categories( $categories ) {
    return array_merge( array( array(
        'slug'  => 'clever-fox',
        'title' => __( 'Info Box', 'clever-fox' ),
    ) ), $categories );
}
if ( version_compare( $GLOBALS['wp_version'], '5.8-alpha-1', '<' ) ) {
    add_filter( 'block_categories', 'gradiant_block_categories', 10, 2 );
} else {
    add_filter( 'block_categories_all', 'gradiant_block_categories', 10, 2 );
}

// Register Blocks
function gradiant_wp_register_script( $block, $options = array() ) {
    register_block_type( 'info-box/' . $block,
        array_merge( array(
            'editor_script' => 'gradiant_editor_script',
            'editor_style'  => 'gradiant_editor_style',
            'script'        => 'gradiant_script',
            'style'         => 'gradiant_style',
        ), $options )
    );
}

// Enqueue assets
function gradiant_enqueue_block_assets() {
    wp_enqueue_script( 'font-awesome-kit', CLEVERFOX_PLUGIN_URL . '/inc/gradiant/block/assets/js/font-awesome-kit.js', array(), '1.0', true );
}
add_action( 'enqueue_block_assets', 'gradiant_enqueue_block_assets' );

function gradiant_register() {
    // Resister script in editor
	 wp_register_script( 'gradiant_editor_script', CLEVERFOX_PLUGIN_URL . '/inc/gradiant/block/dist/editor.js', array( 'wp-blob', 'wp-block-editor', 'wp-blocks', 'wp-components', 'wp-compose', 'wp-data', 'wp-element', 'wp-html-entities', 'wp-i18n', 'wp-rich-text', 'font-awesome-kit' ), '1.0', false ); 
    wp_register_style( 'gradiant_editor_style', CLEVERFOX_PLUGIN_URL . '/inc/gradiant/block/dist/editor.css', array( 'wp-edit-blocks'), '0.0' );

    // Register Blocks
    gradiant_wp_register_script( 'infos', array( 'render_callback' => 'render_gradiant_infos' ) );
    gradiant_wp_register_script( 'info', array( 'render_callback' => 'render_gradiant_info' ) );
}
add_action( 'init', 'gradiant_register' );

// Generate Styles
class GradiantInfoStyleGenerator {
    public static $styles = [];
    public static function addStyle($selector, $styles){
        if(array_key_exists($selector, self::$styles)){
           self::$styles[$selector] = wp_parse_args(self::$styles[$selector], $styles);
        }else {
            self::$styles[$selector] = $styles;
        }
    }
    public static function renderStyle(){
        $output = '';
        foreach(self::$styles as $selector => $style){
            $new = '';
            foreach($style as $property => $value){
                if($value == ''){ $new .= $property; }else { $new .= " $property: $value;"; }
            }
            $output .= "$selector { $new }";
        }
        return $output;
    }
}

// Render Infos
function render_gradiant_infos($attributes, $content){
    $cId = isset($attributes['cId']) ? esc_attr($attributes['cId']) : '';

    // Generate Styles
    $infosStyle = new GradiantInfoStyleGenerator();

    ob_start(); // Start output buffering
    ?>
    <div class='av-columns-area info-section info-section-one wow fadeInUp'>
        <?php echo wp_kses_post($infosStyle::renderStyle()); ?>
        <?php echo wp_kses_post($content); ?>
    </div>
    <?php
    $output = ob_get_clean(); // Get buffered content and clean buffer

    $infosStyle::$styles = array(); // Empty styles before returning

    return $output;
}

// Render Info
function render_gradiant_info( $attributes ) {
    extract( $attributes );

    $cId = isset($cId) ? esc_attr($cId) : ''; // Escaping dynamic content
    $columns = isset($columns) ? $columns : array( 'desktop' => 2, 'tablet'  => 2, 'mobile'  => 1 );
    $isIcon = isset($isIcon) ? (bool) $isIcon : true; // Ensuring boolean value
    $icon = isset($icon) ? array_map('esc_attr', $icon) : array('class' => 'fa fa-wordpress', 'fontSize' => 70); // Escaping and ensuring safe attributes
    $isTitle = isset($isTitle) ? (bool) $isTitle : true; // Ensuring boolean value
    $title = isset($title) ? esc_html($title) : 'Info title'; // Escaping HTML
    $isDesc = isset($isDesc) ? (bool) $isDesc : true; // Ensuring boolean value
    $desc = isset($desc) ? esc_html($desc) : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, fuga.'; // Escaping HTML
    $isLink = isset($isLink) ? (bool) $isLink : true; // Ensuring boolean value
    $link = isset($link) ? esc_url($link) : '#'; // Escaping URL
    $isInfoType = isset($isInfoType) ? (bool) $isInfoType : true; // Ensuring boolean value
    $infoType = isset($infoType) ? esc_attr($infoType) : 'Style 1'; // Escaping dynamic content
	if($infoType =='Style 2'){
		$infoTypes='info-wrapper2';
	}elseif($infoType =='Style 3'){
		$infoTypes='info-wrapper2 info-wrapper3';
	}else{
		$infoTypes='info-wrapper';
	}

    // Generate Styles
    $infoStyle = new GradiantInfoStyleGenerator();
    $infoStyle::addStyle("#gradiantInfo-$cId .gradiantInfo .icon", array(
        $icon['styles'] ?? 'font-size: 70px;' => ''
    ));

    // Components
	$linkEl = $isLink ? esc_url($link) : ''; // Escaping URL
    $iconEl = $isIcon && $icon['class'] ? "<div class='contact-icon'><i class='".esc_attr($icon['class'])."'></i></div>" : '';

    if ($infoType == 'Style 2' || $infoType == 'Style 3') {
        $titleEl = $isTitle ? "<a href='".esc_url($linkEl)."' class='contact-info'><span class='text'>".esc_html($title)."</span>" : '';
        $descEl = $isDesc ? "<span class='description title'>".esc_html($desc)."</span></a>" : '';
    } else {
        $titleEl = $isTitle ? "<a href='".esc_url($linkEl)."' class='contact-info'><span class='title'>".esc_html($title)."</span></a>" : '';
        $descEl = $isDesc ? "<span class='description text'>".esc_html($desc)."</span>" : '';
    }	

    ob_start(); // Echo the content
    // echo "<div class='av-column-".$columns['desktop']." ".$infoTypes."' id='gradiantInfo-$cId'>
        // <style>". $infoStyle::renderStyle() ."</style>
		// <aside class='widget widget-contact'>
			// <div class='contact-area'>
				// $iconEl $titleEl $descEl 
			// </div>	
		// </aside>
    // </div>";
	
	echo "<div class='av-column-" . esc_attr($columns['desktop']) . " " . esc_attr($infoTypes) . "' id='gradiantInfo-" . esc_attr($cId) . "'>
        <aside class='widget widget-contact'>
            <div class='contact-area'>
                " . wp_kses_post($iconEl) . " " . wp_kses_post($titleEl) . " " . wp_kses_post($descEl) . "
            </div>  
        </aside>
    </div>";


    $infoStyle::$styles = array(); // Empty before blocks styles in after blocks
    return ob_get_clean();
}