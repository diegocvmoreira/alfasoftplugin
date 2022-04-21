<?php 

/**
 * Register a custom post type called "Person".
 *
 */
function diego_contact_ctp_person_init() {
 
    $labels = array(
        'name'                  => _x( 'Persons', 'Post type general name', 'diego-contatc-plugin' ),
        'singular_name'         => _x( 'Person', 'Post type singular name', 'diego-contatc-plugin' ),
        'menu_name'             => _x( 'Persons', 'Admin Menu text', 'diego-contatc-plugin' ),
        'name_admin_bar'        => _x( 'Person', 'Add New on Toolbar', 'diego-contatc-plugin' ),
        'add_new'               => __( 'Add New', 'diego-contatc-plugin' ),
        'add_new_item'          => __( 'Add New Person', 'diego-contatc-plugin' ),
        'new_item'              => __( 'New Person', 'diego-contatc-plugin' ),
        'edit_item'             => __( 'Edit Person', 'diego-contatc-plugin' ),
        'view_item'             => __( 'View Person', 'diego-contatc-plugin' ),
        'all_items'             => __( 'All Persons', 'diego-contatc-plugin' ),
        'search_items'          => __( 'Search Persons', 'diego-contatc-plugin' ),
        'parent_item_colon'     => __( 'Parent Persons:', 'diego-contatc-plugin' ),
        'not_found'             => __( 'No books found.', 'diego-contatc-plugin' ),
        'not_found_in_trash'    => __( 'No books found in Trash.', 'diego-contatc-plugin' ),
        'featured_image'        => _x( 'Person Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'diego-contatc-plugin' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'diego-contatc-plugin' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'diego-contatc-plugin' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'diego-contatc-plugin' ),
        'archives'              => _x( 'Person archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'diego-contatc-plugin' ),
        'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'diego-contatc-plugin' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'diego-contatc-plugin' ),
        'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'diego-contatc-plugin' ),
        'items_list_navigation' => _x( 'Persons list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'diego-contatc-plugin' ),
        'items_list'            => _x( 'Persons list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'diego-contatc-plugin' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'persons' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'revisions' ),
    );
 
    register_post_type( 'diego_contact_person', $args );


    add_filter('acf/settings/show_admin', '__return_false');

    if( function_exists('acf_add_local_field_group') ) :
    acf_add_local_field_group(array(
        'key' => 'group_62616e247d5c6',
        'title' => 'Person Data',
        'fields' => array(
            array(
                'key' => 'field_62616e3484aa6',
                'label' => 'Name',
                'name' => 'name',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_62616e6684aa7',
                'label' => 'Email',
                'name' => 'email',
                'type' => 'email',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_62616e7084aa8',
                'label' => 'Contacts',
                'name' => 'contacts',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_62616ebd84aaa',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_62616e7984aa9',
                        'label' => 'Country Code',
                        'name' => 'countrycode',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(),
                        'default_value' => false,
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 1,
                        'ajax' => 0,
                        'return_format' => 'value',
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_62616ebd84aaa',
                        'label' => 'Number',
                        'name' => 'phone_number',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 9,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'diego_contact_person',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    endif;

}
add_action( 'init', 'diego_contact_ctp_person_init' );

/*
 * Update the post title with the person name Value
 */
add_action('acf/save_post', 'diego_contact_update_title');
function diego_contact_update_title( $post_id ) {

    if ('diego_contact_person' != get_post_type( $post_id ) ) return;

    $name = get_field('name', $post_id);

    $post_update = array(
        'ID'         => $post_id,
        'post_title' => $name
    );

     wp_update_post( $post_update );

}


add_action( 'save_post', 'diego_contact_update_avatar', 10,3 );

function diego_contact_update_avatar( $post_id, $post, $update ) {


    if ( 'diego_contact_person' !== $post->post_type )  return;

    if ( get_post_meta( $post_id, 'diego_contact_person_avatar', true) ) return;

    $request_response = wp_remote_request( 'https://app.pixelencounter.com/api/basic/monsters/random' );
    if ( is_array($request_response) && isset($request_response['response']['code']) && $request_response['response']['code'] == 200 ) {
        $svg = $request_response['body'];
         update_post_meta( $post_id,  'diego_contact_person_avatar', $svg );
    } 
 
}

/*
 * Populate select country field with API
 */
function diego_contact_populate_country_code( $field ) {
    
    $field['choices'] = array();       

    $request_response = wp_remote_request( 'https://restcountries.com/v3.1/all' );

    if ( is_array($request_response) && isset($request_response['response']['code']) && $request_response['response']['code'] == 200 ) {
        $countries = json_decode($request_response['body']);
        $i=0;
        foreach ($countries as $country) {
            $i++;

            $code = isset($country->idd->root) ? $country->idd->root : '';
            $country_name = isset($country->name->common) ? $country->name->common : '';

            if (isset($country->idd->suffixes) && sizeof($country->idd->suffixes) == 1) {
                $code .= $country->idd->suffixes[0];
            } 
            $field['choices'][ $code ] = $country_name . ' (' . $code . ')';
        }
    }

    return $field;
    
}

add_filter('acf/load_field/name=countrycode', 'diego_contact_populate_country_code');

/*
 * Extra validation for person name
 */
function diego_contact_exta_validations_name( $valid, $value, $field, $input ){
 
    if( !$valid ) return $valid;
    if ( strlen($value) < 5 ) $valid = 'Must be a minimum of 5 characters.';
    return $valid;
 
}
add_filter('acf/validate_value/name=name', 'diego_contact_exta_validations_name', 10, 4);


/*
 * Extra validation for person name
 */
function diego_contact_exta_validations_phone_number( $valid, $value, $field, $input ){

    if( !$valid ) return $valid;        
    // size
    if ( strlen($value) != 9 ) $valid = 'Must be 9 characters.';
    return $valid;
    
}
add_filter('acf/validate_value/name=phone_number', 'diego_contact_exta_validations_phone_number', 10, 4);




/*
 * Extra validation for person email
 */
function diego_contact_exta_validations_email($valid, $value, $field, $input) {

    if (!$valid || (!isset($_POST['post_ID']) && !isset($_POST['post_id']))) {
        return $valid;
    }
    if (isset($_POST['post_ID'])) {
        $post_id = intval($_POST['post_ID']);
    } else {
        $post_id = intval($_POST['post_id']);
    }
    if (!$post_id) {
        return $valid;
    }

    $post_type = get_post_type($post_id);
    $field_name = $field['name'];

    $args = array(
        'post_type' => $post_type,
        'post_status' => 'publish, draft, trash',
        'post__not_in' => array($post_id),
        'meta_query' => array(
            array(
                'key' => 'email',
                'value' => $value
            )
        )
    );
    $query = new WP_Query($args);
    if (count($query->posts)){
        return 'This Value is not Unique. Please enter a unique '.$field['label'];
    }
    return true;
}
add_filter('acf/validate_value/name='.'email', 'diego_contact_exta_validations_email', 10, 4);






/*
 * Shortcode persons list
 */
function diego_contact_shortcode_persons_list() {

    global $post;

    ob_start();

    $args = array(
        'post_type'         => 'diego_contact_person',
        'posts_per_page'    => -1,
    );

    $search = '';
    if (isset($_GET['search'])) {
        $search = sanitize_text_field( $_GET['search'] );
        $args['s'] = $search;
    }

    $persons_query = new WP_Query($args);

    ?>
        <div class="diego_contact_filter">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Filter by name" value="<?php echo $search ?>">
                <input type="submit" value="Filter">
            </form>
        </div>
    <?php

    if ($persons_query->have_posts() ) {
        while ($persons_query->have_posts() ) {
            $persons_query->the_post();
            $email = get_field('email');
            $contacts = get_field('contacts');

            $avatar = get_post_meta($post->ID, 'diego_contact_person_avatar', true);

            $contact_temp = array();
            foreach ($contacts as $contact) {
                $contact_temp[] = $contact['countrycode'] . ' ' . $contact['phone_number'];
            }
            $contacts_str = implode(', ', $contact_temp);
            ?>

            <div class="diego_contact_person">
                <div class="avatar" style="width: 50px;    float: left;    overflow: hidden;    margin-right: 15px;">
                    <?php echo  $avatar; ?>
                </div>
                <h3><?php the_title() ?></h3>
                <p>
                    Email: <?php echo $email; ?> 
                </p>
                <p>
                    Contacts: <?php echo $contacts_str; ?> 
                </p>
            </div>
            <?php
        } 
        wp_reset_postdata();
    } else {
        ?>
            <h3>No person found.</h3>
        <?php
    } 


    return ob_get_clean();
}
add_shortcode( 'diego_contact_persons_list', 'diego_contact_shortcode_persons_list' );