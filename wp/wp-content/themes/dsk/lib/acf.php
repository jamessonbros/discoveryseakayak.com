<?php 
// Theme-specific custom fields

// Trip Specs
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_trip-specs',
    'title' => 'Trip Specs',
    'fields' => array (
      array (
        'key' => 'field_52dc0e4675638',
        'label' => 'Price per Person',
        'name' => 'price_per_person',
        'type' => 'text',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '$',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_52dc0e6a75639',
        'label' => 'Group discount message',
        'name' => 'group_discount_message',
        'type' => 'text',
        'default_value' => 'Groups of 4 or more - Save 10%!',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_52dc0ea57563a',
        'label' => 'Price Message',
        'name' => 'price_message',
        'type' => 'text',
        'default_value' => 'Price per person, tax not included.',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_52dc0ebd7563b',
        'label' => 'Trip Duration',
        'name' => 'trip_duration',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_52ea5d93b0498',
        'label' => 'Trip Duration Units',
        'name' => 'trip_duration_units',
        'type' => 'select',
        'required' => 1,
        'choices' => array (
          'Hours' => 'Hours',
          'Days' => 'Days',
        ),
        'default_value' => 'Hours',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      array (
        'key' => 'field_52dc10cbec3fd',
        'label' => 'Trip Dates Message',
        'name' => 'trip_dates_message',
        'type' => 'text',
        'default_value' => 'May through September Kayak Tours depart 7 days a week.',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_52dc2ffd32e04',
        'label' => 'Gear Provided',
        'name' => 'gear_provided',
        'type' => 'wysiwyg',
        'default_value' => '<ul>
        <li>Quality Fiberglass Kayaks (Fiberglass kayak are superior in performance and comfort)</li>
        <li>Waterproof Paddle Tops and Pants</li>
        <li>Dry Bags</li>
        <li>Werner Paddles (Paddles made in Washington State)</li>
        <li>Spray Skirts</li>
        <li>PFD’s (Life Vest)</li>
      </ul>',
        'toolbar' => 'basic',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_52dc307021526',
        'label' => 'What to Bring',
        'name' => 'what_to_bring',
        'type' => 'wysiwyg',
        'default_value' => '<ul>
        <li>Snacks, we will be on the water the entire time. So having a snack along is not a bad idea.</li>
        <li>Don’t for get a BOTTLE OF WATER.</li>
        <li>It’s nice to have a pair of shoes you do not mind getting wet. There are times depending on the tide that we may have to step into the water to get in the kayaks.</li>
        <li>Sunscreen, Sunglasses, Hat and a Camera are all highly recommended.</li>
      </ul>
  
      <p class="lead">If you forget any of the items, not to worry. Discovery Sea Kayaks is also a fully stocked outdoor retail shop. We can fit you with any items you may have left behind, or don\'t feel like lugging on your trip.</p>',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_52dc3317d3504',
        'label' => 'Itinerary',
        'name' => 'itinerary',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-trip.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}



// Trip Departures
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_trip-departures',
    'title' => 'Trip Departures',
    'fields' => array (
      array (
        'key' => 'field_52dc24a9348d2',
        'label' => 'Departure',
        'name' => 'departures',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_52dc24c0348d3',
            'label' => 'Time',
            'name' => 'time',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_52dc24e4348d4',
            'label' => 'AM/PM',
            'name' => 'am_pm',
            'type' => 'select',
            'column_width' => '',
            'choices' => array (
              'AM' => 'AM',
              'PM' => 'PM',
            ),
            'default_value' => '',
            'allow_null' => 0,
            'multiple' => 0,
          ),
          array (
            'key' => 'field_52dc24fa348d5',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'wysiwyg',
            'column_width' => '',
            'default_value' => '',
            'toolbar' => 'basic',
            'media_upload' => 'yes',
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'row',
        'button_label' => 'Add Row',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-trip.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 500,
  ));
}

// Trip Photos
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_trip-photos',
    'title' => 'Trip Photos',
    'fields' => array (
      array (
        'key' => 'field_52dc0fa3585ab',
        'label' => 'Gallery',
        'name' => 'gallery',
        'type' => 'gallery',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-trip.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 1000,
  ));
}


// Lessons template
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_lessons',
    'title' => 'Lessons',
    'fields' => array (
      array (
        'key' => 'field_5304f2040e25c',
        'label' => 'Classes',
        'name' => 'classes',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_5304f2160e25d',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'required' => 1,
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_5304f22a0e25e',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'required' => 1,
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'formatting' => 'br',
          ),
        ),
        'row_min' => 4,
        'row_limit' => 4,
        'layout' => 'row',
        'button_label' => 'Add Class',
      ),
      array (
        'key' => 'field_5304f27b0f81c',
        'label' => 'Private Instruction',
        'name' => 'private_instruction',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_5304f2930f81d',
        'label' => 'Paddle Clinics',
        'name' => 'paddle_clinics',
        'type' => 'wysiwyg',
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'formatting' => 'br',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_5304f2b90f81e',
        'label' => 'Pool Sessions',
        'name' => 'pool_sessions',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-lessons.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}


// Hero image
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_hero-image',
    'title' => 'Hero Image',
    'fields' => array (
      array (
        'key' => 'field_5304fa79d155e',
        'label' => 'Hero Image',
        'name' => 'hero_image',
        'type' => 'image',
        'instructions' => '1160px W x 450px H - height may vary',
        'save_format' => 'object',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'acf_after_title',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => -1,
  ));
}


// Guides
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_guides',
    'title' => 'Guides',
    'fields' => array (
      array (
        'key' => 'field_530795ba0547b',
        'label' => 'Guides',
        'name' => 'guides',
        'type' => 'repeater',
        'required' => 1,
        'sub_fields' => array (
          array (
            'key' => 'field_530795cc0547c',
            'label' => 'Name',
            'name' => 'name',
            'type' => 'text',
            'required' => 1,
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_5307979a2edac',
            'label' => 'Byline',
            'name' => 'byline',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_530795d90547d',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array (
            'key' => 'field_530795e60547e',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'wysiwyg',
            'column_width' => '',
            'default_value' => '',
            'toolbar' => 'full',
            'media_upload' => 'no',
          ),
        ),
        'row_min' => 1,
        'row_limit' => '',
        'layout' => 'row',
        'button_label' => 'Add Guide',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-guides.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
        0 => 'excerpt',
        1 => 'custom_fields',
        2 => 'discussion',
        3 => 'comments',
        4 => 'revisions',
        5 => 'author',
        6 => 'format',
        7 => 'featured_image',
        8 => 'categories',
        9 => 'tags',
        10 => 'send-trackbacks',
      ),
    ),
    'menu_order' => 0,
  ));
}
