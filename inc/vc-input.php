<?php
// For Common Heading Section
vc_map(array(
    'name'          =>  __('Common Heading', 'reveal_onepage'),
    'description'   =>  'This is for common heading',
    'base'          =>  'common',
    'category'      =>  'Reveal',
    'icon'          =>  'fa fa-map',
    'params'        =>  array(
        array(
            'param_name'    =>  'common_heading',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your common heading', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'common_text',
            'type'          =>  'textarea',
            'heading'       =>  __('Input your common heading', 'reveal_onepage')
        ),
    )
));

// For About Section
vc_map(array(
    'name'          =>  __('About Section', 'reveal_onepage'),
    'description'   =>  'This is for about section',
    'base'          =>  'about_sec',
    'category'      =>  'Reveal',
    'icon'          =>  'fa fa-map',
    'params'        =>  array(
        array(
            'param_name'    =>  'heading_one',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your heading one', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'heading_two',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your heading two', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'item_one',
            'type'          =>  'textarea',
            'heading'       =>  __('Input your item one', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'item_two',
            'type'          =>  'textarea',
            'heading'       =>  __('Input your item two', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'item_three',
            'type'          =>  'textarea',
            'heading'       =>  __('Input your item three', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'about_img',
            'type'          =>  'attach_image',
            'heading'       =>  __('Input your about image', 'reveal_onepage')
        ),
    )
));

// For Services Section
vc_map(array(
    'name'          =>  __('Services Section', 'reveal_onepage'),
    'description'   =>  'This is for services section',
    'base'          =>  'services_sec',
    'category'      =>  'Reveal',
    'icon'          =>  'fa fa-map',
    'params'        =>  array(
        array(
            'param_name'    =>  'service_grp',
            'type'          =>  'param_group',
            'heading'       =>  'service_group',
            'params'        =>  array(
                array(
                    'param_name'    =>  'ser_icon',
                    'type'          =>  'iconpicker',
                    'heading'       =>  __('Select your icon', 'reveal_onepage')
                ),
                array(
                    'param_name'    =>  'ser_title',
                    'type'          =>  'textfield',
                    'heading'       =>  __('Input your title', 'reveal_onepage')
                ),
                array(
                    'param_name'    =>  'ser_desc',
                    'type'          =>  'textarea',
                    'heading'       =>  __('Input your description', 'reveal_onepage')
                ),
            )
        )
    )
));

// For Clients Section
vc_map(array(
    'name'          =>      __('Our Client', 'reveal_onepage'),
    'description'   =>      'This is for client section',
    'base'          =>      'client',
    'category'      =>      'Reveal',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'clients',
            'type'          =>  'textfield',
            'heading'       =>  __('Post per slider','reveal_onepage')

        ),
    )
));

// For Call To Action Section
vc_map(array(
    'name'          =>      __('Call To Action', 'reveal_onepage'),
    'description'   =>      'This is for call to action section',
    'base'          =>      'cta',
    'category'      =>      'Reveal',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'heading',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your heading', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'desc',
            'type'          =>  'textarea',
            'heading'       =>  __('Input your description','reveal_onepage')
        ),
        array(
            'param_name'    =>  'btn',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your button text','reveal_onepage')
        ),

        array(
            'param_name'    =>  'btnlink',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your button link', 'reveal_onepage')
        ),
    )
));

// For Intro Section
vc_map(array(
    'name'          =>      __('Intro Section', 'reveal_onepage'),
    'description'   =>      'This is for Intro Section',
    'base'          =>      'intro',
    'category'      =>      'Reveal',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'heading',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your heading', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'btnonet',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your button one text', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'btnonel',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your button one link', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'btntwot',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your button two text', 'reveal_onepage')
        ),
        array(
            'param_name'    =>  'btntwol',
            'type'          =>  'textfield',
            'heading'       =>  __('Input your button two link', 'reveal_onepage')
        ),
        array(
            'type'          =>  'param_group',
            'heading'       =>  'image_group',
            'param_name'    =>  'image_grp',
            'params'        =>  array(
                array(
                    'param_name'    =>  'img_slider',
                    'type'          =>  'attach_image',
                    'heading'       =>  __('Input your slider image', 'reveal_onepage')
        
                ),
            )

        )
    )

));

// For Our Portfolio Section
vc_map(array(
    'name'          =>      __('Our Portfolio', 'reveal_onepage'),
    'description'   =>      'This is for protfolio section',
    'base'          =>      'portfolio',
    'category'      =>      'Reveal',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'portfolio_item',
            'type'          =>  'textfield',
            'heading'       =>  __('Post per slider', 'reveal_onepage')
        ),
    )
));

// For Our Team Section
vc_map(array(
    'name'          =>  __('Team Section', 'reveal_onepage'),
    'description'   =>  'This is for team section',
    'base'          =>  'team_sec',
    'category'      =>  'Reveal',
    'icon'          =>  'fa fa-map',
    'params'        =>  array(
        array(
            'param_name'    =>  'team_item',
            'type'          =>  'textfield',
            'heading'       =>  __('Post per slider', 'reveal_onepage')
        )
    )
));


// For Contact Section
vc_map(array(
    'name'          =>  __('Contact Section', 'reveal_onepage'),
    'description'   =>  'This is for contact section',
    'base'          =>  'cont_sec',
    'category'      =>  'Reveal',
    'icon'          =>  'fa fa-map',
    'params'        =>  array(
        array(
            'param_name'    =>  'cont_grp',
            'type'          =>  'param_group',
            'heading'       =>  'Contact Group',
            'params'        =>  array(
                array(
                    'param_name'    =>  'cont_icon',
                    'type'          =>  'iconpicker',
                    'heading'       =>  __('Select your icon', 'reveal_onepage')
                ),
                array(
                    'param_name'    =>  'cont_title',
                    'type'          =>  'textfield',
                    'heading'       =>  __('Input your title', 'reveal_onepage')
                ),
                array(
                    'param_name'    =>  'cont_desc',
                    'type'          =>  'textarea',
                    'heading'       =>  __('Input your description', 'reveal_onepage')
                ),
            )
        )
    )
));

// For Map Section
vc_map(array(
    'name'      => __('Map Section', 'cont_icon'),
    'description'   => 'This is for map section',
    'base'          => 'maps',
    'category'      => 'Reveal',
    'icon'          => 'fa fa-map',
    'params'        => array(
        array(
            'param_name'      => 'place',
            'type'            => 'textfield',
            'heading'         => 'Type your place name'
        ),
        array(
            'param_name'      => 'zoom',
            'type'            => 'textfield',
            'heading'         => 'Type your your zoom text'
        ),
    )
));



// For Testimonials Section
vc_map(array(
    'name'          =>  __('Testimonials Section', 'reveal_onepage'),
    'description'   =>  'This is for testimonials section',
    'base'          =>  'testi_sec',
    'category'      =>  'Reveal',
    'icon'          =>  'fa fa-map',
    'params'        =>  array(
        array(
            'param_name'    =>  'testi_item',
            'type'          =>  'textfield',
            'heading'       =>  __('Post per page', 'reveal_onepage')
        )
    )
));