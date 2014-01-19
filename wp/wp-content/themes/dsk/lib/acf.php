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
        'append' => 'Hours',
        'formatting' => 'html',
        'maxlength' => '',
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
