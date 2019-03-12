<?php

    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'wp_Theme_Options' ) ) {

        class wp_Theme_Options {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            public function setSections() {


                // Home
                $this->sections[] = array(
                    'title'  => __( 'Home', 'wp' ),
                    'desc'   => __( 'All of setings for web on this theme.', 'wp' ),
                    'icon'   => 'el el-home',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'    => 'how-to-enjoy',
                            'type'  => 'media',
                            'title' => __('Image how to enjoy', 'wp'),
                            'desc'  => __('Image that you want to use as enjoy.', 'wp')
                        ),
                        array(
                            'id'    => 'osaka-convention-tourism',
                            'type'  => 'media',
                            'title' => __('Image osaka convention & tourism bureau', 'wp'),
                        ),
                    )
                );
                // Discover english
                $this->sections[] = array(
                    'title'  => __( 'Discover english', 'wp' ),
                    'desc'   => __( 'All of setings for web on this theme.', 'wp' ),
                    'icon'   => 'el el-picture',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'    => 'banner-image-discover',
                            'type'  => 'media',
                            'title' => __('Discover Image', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        // array(
                        //     'id'    => 'banner-image-discover-sp',
                        //     'type'  => 'media',
                        //     'title' => __('Discover Image smartphone', 'wp'),
                        //     'desc'  => __('Image that you want to use as discover.', 'wp')
                        // ),
                        array(
                            'id'    => 'banner-image-discover-get',
                            'type'  => 'media',
                            'title' => __('Discover Image get discount', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-safe',
                            'type'  => 'media',
                            'title' => __('Discover Image safe secure', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-nearby',
                            'type'  => 'media',
                            'title' => __('Discover Image nearby', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                    )
                );
                // Discover korean
                $this->sections[] = array(
                    'title'  => __( 'Discover korean', 'wp' ),
                    'desc'   => __( 'All of setings for web on this theme.', 'wp' ),
                    'icon'   => 'el el-picture',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'    => 'banner-image-discover-ko',
                            'type'  => 'media',
                            'title' => __('Discover Image korean', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        // array(
                        //     'id'    => 'banner-image-discover-sp-ko',
                        //     'type'  => 'media',
                        //     'title' => __('Discover Image smartphone korean', 'wp'),
                        //     'desc'  => __('Image that you want to use as discover.', 'wp')
                        // ),
                        array(
                            'id'    => 'banner-image-discover-get-ko',
                            'type'  => 'media',
                            'title' => __('Discover Image get discount', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-safe-ko',
                            'type'  => 'media',
                            'title' => __('Discover Image safe secure', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-nearby-ko',
                            'type'  => 'media',
                            'title' => __('Discover Image nearby', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                    )
                );
                // Discover china
                $this->sections[] = array(
                    'title'  => __( 'Discover china', 'wp' ),
                    'desc'   => __( 'All of setings for web on this theme.', 'wp' ),
                    'icon'   => 'el el-picture',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'    => 'banner-image-discover-cn',
                            'type'  => 'media',
                            'title' => __('Discover Image china', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        // array(
                        //     'id'    => 'banner-image-discover-sp-cn',
                        //     'type'  => 'media',
                        //     'title' => __('Discover Image smartphone china', 'wp'),
                        //     'desc'  => __('Image that you want to use as discover.', 'wp')
                        // ),
                        array(
                            'id'    => 'banner-image-discover-get-cn',
                            'type'  => 'media',
                            'title' => __('Discover Image get discount', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-safe-cn',
                            'type'  => 'media',
                            'title' => __('Discover Image safe secure', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-nearby-cn',
                            'type'  => 'media',
                            'title' => __('Discover Image nearby', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                    )
                );
                // Discover taiwan
                $this->sections[] = array(
                    'title'  => __( 'Discover taiwan', 'wp' ),
                    'desc'   => __( 'All of setings for web on this theme.', 'wp' ),
                    'icon'   => 'el el-picture',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'    => 'banner-image-discover-tw',
                            'type'  => 'media',
                            'title' => __('Discover Image taiwan', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        // array(
                        //     'id'    => 'banner-image-discover-sp-tw',
                        //     'type'  => 'media',
                        //     'title' => __('Discover Image smartphone taiwan', 'wp'),
                        //     'desc'  => __('Image that you want to use as discover.', 'wp')
                        // ),
                        array(
                            'id'    => 'banner-image-discover-get-tw',
                            'type'  => 'media',
                            'title' => __('Discover Image get discount', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-safe-tw',
                            'type'  => 'media',
                            'title' => __('Discover Image safe secure', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-nearby-tw',
                            'type'  => 'media',
                            'title' => __('Discover Image nearby', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                    )
                );
                // Discover japanese
                $this->sections[] = array(
                    'title'  => __( 'Discover japanese', 'wp' ),
                    'desc'   => __( 'All of setings for web on this theme.', 'wp' ),
                    'icon'   => 'el el-picture',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'    => 'banner-image-discover-ja',
                            'type'  => 'media',
                            'title' => __('Discover Image japnese', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        // array(
                        //     'id'    => 'banner-image-discover-sp-ja',
                        //     'type'  => 'media',
                        //     'title' => __('Discover Image smartphone japanese', 'wp'),
                        //     'desc'  => __('Image that you want to use as discover.', 'wp')
                        // ),
                        array(
                            'id'    => 'banner-image-discover-get-ja',
                            'type'  => 'media',
                            'title' => __('Discover Image get discount', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-safe-ja',
                            'type'  => 'media',
                            'title' => __('Discover Image safe secure', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-discover-nearby-ja',
                            'type'  => 'media',
                            'title' => __('Discover Image nearby', 'wp'),
                            'desc'  => __('Image that you want to use as discover.', 'wp')
                        ),
                    )
                );

                // ACTUAL DECLARATION OF SECTIONS
                $this->sections[] = array(
                    'title'  => __( 'Header', 'wp' ),
                    'desc'   => __( 'All of setings for header on this theme.', 'wp' ),
                    'icon'   => 'el el-picture',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id'       => 'logo-on',
                            'type'     => 'switch',
                            'title'    => __( 'Enable Image Logo', 'wp' ),
                            'compiler' => 'bool',
                            // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( 'Do you want to enable image logo?', 'wp' ),
                            'on'        => __('Enabled', 'wp'),
                            'off'       => __('Disabled', 'wp')
                        ),
                        array(
                            'id'    => 'logo-image',
                            'type'  => 'media',
                            'title' => __('Logo Image', 'wp'),
                            'desc'  => __('Image that you want to use as logo.', 'wp')
                        ),
                    )
                );

                // set image page  home
                $this->sections[] = array(
                    'title'  => __( 'Banner', 'wp' ),
                    'desc'   => __( 'All of setings for banner on this theme.', 'wp' ),
                    'icon'   => 'el el-picture',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'    => 'banner-image',
                            'type'  => 'media',
                            'title' => __('Banner Image', 'wp'),
                            'desc'  => __('Image that you want to use as Banner.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-sp',
                            'type'  => 'media',
                            'title' => __('Banner Image smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as Banner.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-detail',
                            'type'  => 'media',
                            'title' => __('Detail Image', 'wp'),
                            'desc'  => __('Image that you want to use as detail.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-detail-sp',
                            'type'  => 'media',
                            'title' => __('Detail Image Smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as detail.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-about',
                            'type'  => 'media',
                            'title' => __('About Image', 'wp'),
                            'desc'  => __('Image that you want to use as about.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-topic',
                            'type'  => 'media',
                            'title' => __('Topic Image', 'wp'),
                            'desc'  => __('Image that you want to use as topic.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-topic-sp',
                            'type'  => 'media',
                            'title' => __('Topic Image Smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as topic.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-howto',
                            'type'  => 'media',
                            'title' => __('Howto Image', 'wp'),
                            'desc'  => __('Image that you want to use as howto.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-howto-sp',
                            'type'  => 'media',
                            'title' => __('Howto Image Smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as howto.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-contact',
                            'type'  => 'media',
                            'title' => __('Contact Image', 'wp'),
                            'desc'  => __('Image that you want to use as contact.', 'wp')
                        ),
                        array(
                            'id'    => 'banner-image-contact-sp',
                            'type'  => 'media',
                            'title' => __('Contact Image Smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as contact.', 'wp')
                        ),                        
                    )
                );

                // how to
                $this->sections[] = array(
                    'title'  => __( 'How to english', 'wp' ),
                    'icon'   => 'el el-picture',

                    'fields' => array(
                        array(
                            'id'    => 'image-howto-1',
                            'type'  => 'media',
                            'title' => __('Image', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'image-howto-1-sp',
                            'type'  => 'media',
                            'title' => __('Image Smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'title-howto',
                            'type'  => 'editor',
                            'title' => __('Title ', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-1',
                            'type'  => 'textarea',
                            'title' => __('Text 1', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-2',
                            'type'  => 'textarea',
                            'title' => __('Text 2', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-3',
                            'type'  => 'textarea',
                            'title' => __('Text 3', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-4',
                            'type'  => 'textarea',
                            'title' => __('text notifi', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-5',
                            'type'  => 'editor',
                            'title' => __('text coution 1', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'How to japanese', 'wp' ),
                    'icon'   => 'el el-picture',

                    'fields' => array(
                        array(
                            'id'    => 'image-howto-1-ja',
                            'type'  => 'media',
                            'title' => __('Image', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'image-howto-1-ja-sp',
                            'type'  => 'media',
                            'title' => __('Image Smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'title-howto-ja',
                            'type'  => 'editor',
                            'title' => __('Title ', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-1-ja',
                            'type'  => 'textarea',
                            'title' => __('Text 1', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-2-ja',
                            'type'  => 'textarea',
                            'title' => __('Text 2', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-3-ja',
                            'type'  => 'textarea',
                            'title' => __('Text 3', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-4-ja',
                            'type'  => 'textarea',
                            'title' => __('text notifi', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-5-ja',
                            'type'  => 'editor',
                            'title' => __('text coution 1', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                    )
                );

                        // korean
                $this->sections[] = array(
                    'title'  => __( 'How to korean', 'wp' ),
                    'icon'   => 'el el-picture',
                    'fields' => array(
                        array(
                            'id'    => 'image-howto-1-korean',
                            'type'  => 'media',
                            'title' => __('Image korean', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'image-howto-1-korean-sp',
                            'type'  => 'media',
                            'title' => __('Image korean Smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'title-howto-korean',
                            'type'  => 'editor',
                            'title' => __('Title Korean', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-1-korean',
                            'type'  => 'textarea',
                            'title' => __('Text 1 korean', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-2-korean',
                            'type'  => 'textarea',
                            'title' => __('Text 2-korean', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-3-korean',
                            'type'  => 'textarea',
                            'title' => __('Text 3 korean', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-4-korean',
                            'type'  => 'textarea',
                            'title' => __('text notifi korean', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-5-korean',
                            'type'  => 'editor',
                            'title' => __('text coution 1 korean', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                    )
                );

                        // china
                $this->sections[] = array(
                    'title'  => __( 'How to china', 'wp' ),
                    'icon'   => 'el el-picture',
                    'fields' => array(
                        array(
                            'id'    => 'image-howto-1-china',
                            'type'  => 'media',
                            'title' => __('Image china', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'image-howto-1-china-sp',
                            'type'  => 'media',
                            'title' => __('Image china Smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'title-howto-china',
                            'type'  => 'editor',
                            'title' => __('Title china', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-1-china',
                            'type'  => 'textarea',
                            'title' => __('Text 1 china', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-2-china',
                            'type'  => 'textarea',
                            'title' => __('Text 2 china', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-3-china',
                            'type'  => 'textarea',
                            'title' => __('Text 3 china', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-4-china',
                            'type'  => 'textarea',
                            'title' => __('text notifi china', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-5-china',
                            'type'  => 'editor',
                            'title' => __('text coution 1 china', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                    )
                );
                        // Taiwan
                $this->sections[] = array(
                    'title'  => __( 'How to taiwan', 'wp' ),
                    'icon'   => 'el el-picture',
                    'fields' => array(
                        array(
                            'id'    => 'image-howto-1-taiwan',
                            'type'  => 'media',
                            'title' => __('Image Taiwan', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'image-howto-1-taiwan-sp',
                            'type'  => 'media',
                            'title' => __('Image Taiwan Smartphone', 'wp'),
                            'desc'  => __('Image that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'title-howto-tw',
                            'type'  => 'editor',
                            'title' => __('Title tw', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-1-tw',
                            'type'  => 'textarea',
                            'title' => __('Text 1 Taiwan', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                        array(
                            'id'    => 'text-howto-2-tw',
                            'type'  => 'textarea',
                            'title' => __('Text 2 Taiwan', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-3-tw',
                            'type'  => 'textarea',
                            'title' => __('Text 3 Taiwan', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-4-tw',
                            'type'  => 'textarea',
                            'title' => __('text notifi Taiwan', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),

                        array(
                            'id'    => 'text-howto-5-tw',
                            'type'  => 'editor',
                            'title' => __('text coution 1 Taiwan', 'wp'),
                            'desc'  => __('text that you want to use as how to.', 'wp')
                        ),
                    )
                );

                // mapgole
                $this->sections[] = array(
                    'title'  => __( 'Map', 'wp' ),
                    'desc'   => __( 'set url Map', 'wp' ),
                    'icon'   => 'el el-map-marker',

                    'fields' => array(
                        array(
                            'id'    => 'Map',
                            'type'  => 'text',
                            'title' => __('set url Map', 'wp'),
                            'placeholder'  => __('Url', 'wp')
                        ),
                        array(
                            'id'    => 'Map-ja',
                            'type'  => 'text',
                            'title' => __('set url Map Japanese', 'wp'),
                            'placeholder'  => __('Url', 'wp')
                        ),
                        array(
                            'id'    => 'Map-ko',
                            'type'  => 'text',
                            'title' => __('set url Map Korean', 'wp'),
                            'placeholder'  => __('Url', 'wp')
                        ),
                        array(
                            'id'    => 'Map-cn',
                            'type'  => 'text',
                            'title' => __('set url Map China', 'wp'),
                            'placeholder'  => __('Url', 'wp')
                        ),
                        array(
                            'id'    => 'Map-tw',
                            'type'  => 'text',
                            'title' => __('set url Map Taiwan', 'wp'),
                            'placeholder'  => __('Url', 'wp')
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'Youtube', 'wp' ),
                    'desc'   => __( 'set url youtube', 'wp' ),
                    'icon'   => 'el el-icon-youtube',

                    'fields' => array(
                        array(
                            'id'    => 'youtube',
                            'type'  => 'text',
                            'title' => __('set url youtube', 'wp'),
                            'placeholder'  => __('Url', 'wp')
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'Coupon', 'wp' ),
                    'icon'   => 'el el-picture',

                    'fields' => array(
                        array(
                            'id'    => 'click-to-get',
                            'type'  => 'media',
                            'title' => __('Image QR code', 'wp'),
                        ),
                        array(
                            'id'    => 'text-coupon-single',
                            'type'  => 'text',
                            'title' => __('text coupon english', 'wp'),
                            'placeholder'   => ''
                        ),
                        array(
                            'id'    => 'text-coupon-single-ko',
                            'type'  => 'text',
                            'title' => __('text coupon korean', 'wp'),
                            'placeholder'   => ''
                        ),
                        array(
                            'id'    => 'text-coupon-single-cn',
                            'type'  => 'text',
                            'title' => __('text coupon china', 'wp'),
                            'placeholder'   => ''
                        ),
                        array(
                            'id'    => 'text-coupon-single-tw',
                            'type'  => 'text',
                            'title' => __('text coupon taiwan', 'wp'),
                            'placeholder'   => ''
                        ),
                        array(
                            'id'    => 'hour-reset-coupon',
                            'type'  => 'text',
                            'title' => __('Hours reset coupon', 'wp'),
                            'placeholder'   => '6'
                        ),
                        array(
                            'id'    => 'text-discount-coupon',
                            'type'  => 'media',
                            'title' => __('Image text discount coupon', 'wp'),
                        ),
                        array(
                            'id'    => 'text-discount-coupon-sp',
                            'type'  => 'media',
                            'title' => __('Image text discount coupon smartphone', 'wp'),
                        ),
                        array(
                            'id'    => 'logo-in-coupon',
                            'type'  => 'media',
                            'title' => __('Image logo in coupon', 'wp'),
                        ),
                        array(
                            'id'    => 'click-to-get-sp',
                            'type'  => 'media',
                            'title' => __('Image Tab to get', 'wp'),
                        ),

                        array(
                            'id'    => 'burlesque-osaka',
                            'type'  => 'media',
                            'title' => __('Image burlesque osaka discount coupon', 'wp'),
                        ),
                    )
                );

                // set image footer
                $this->sections[] = array(
                    'title'  => __( 'Footer', 'wp' ),
                    'desc'   => __( 'All of setings for footer on this theme.', 'wp' ),
                    'icon'   => 'el el-picture',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id'       => 'footer-on',
                            'type'     => 'switch',
                            'title'    => __( 'Enable Image footer', 'wp' ),
                            'compiler' => 'bool',
                            // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( 'Do you want to enable image footer?', 'wp' ),
                            'on'        => __('Enabled', 'wp'),
                            'off'       => __('Disabled', 'wp')
                        ),
                        array(
                            'id'    => 'footer-image',
                            'type'  => 'media',
                            'title' => __('footer Image', 'wp'),
                            'desc'  => __('Image that you want to use as footer.', 'wp')
                        ),
                        array(
                            'id'        => 'text-footer',
                            'type'      => 'text',
                            'title'     => 'text footer'
                        )
                    )
                );

                // set google analtic
                $this->sections[] = array(
                    'title'  => __( 'Google analytic', 'wp' ),
                    'desc'   => __( 'All of setings for Google analytic on this theme.', 'wp' ),
                    'icon'   => 'el el-googleplus',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'        => 'text-analytic',
                            'type'      => 'text',
                            'title'     => 'ID google analytic'
                        )
                    )
                );
                // set search filter
                $this->sections[] = array(
                    'title'  => __( 'Search filter', 'wp' ),
                    'desc'   => __( 'All of setings for search filter on this theme.', 'wp' ),
                    'icon'   => 'el el-search',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'        => 'area-search-filter',
                            'type'      => 'textarea',
                            'title'     => 'Area',
                            'placeholder' => 'minami|kita'
                        ),
                        array(
                            'id'        => 'price-search-filter',
                            'type'      => 'textarea',
                            'title'     => 'Price',
                            'placeholder' => '5,000|5,000〜10,000|10,000|...'
                        ),
                        array(
                            'id'        => 'detail-search-filter',
                            'type'      => 'textarea',
                            'title'     => 'Feature',
                            'placeholder' => 'performance|high_grade,...'
                        )
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'Typography', 'wp' ),
                    'desc'   => __( 'All of typography settings.', 'wp' ),
                    'icon'   => 'el el-icon-font',

                    'fields' => array(
                        array(
                            'id'       => 'typo-main',
                            'type'     => 'typography',
                            'title'    => __( 'Main Typography', 'wp' ),
                            'output'    => 'body',
                            'text-transform'    => true,
                            'default'   => array(
                                'font-size' => '14px',
                                'font-family' => 'Helvetica Neue, Arial, sans-serif',
                                'color'    => '#333333'
                            )
                        ),
                    )
                );
            }

            public function setHelpTabs() {

                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'           => 'tp_options',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'       => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'    => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'          => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'     => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'         => __( 'Theme Options', 'redux-framework-demo' ),
                    'page_title'         => __( 'Theme Options', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'     => 'AIzaSyAs0iVWrG4E_1bG244-z4HRKJSkg7JVrVQ',
                    // Must be defined to add google fonts to the typography module

                    'async_typography'   => false,
                    // Use a asynchronous font on the front end or font string
                    'admin_bar'          => true,
                    // Show the panel pages on the admin bar
                    'global_variable'    => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'           => true,
                    // Show the time the page took to load, etc
                    'customizer'         => true,
                    // Enable basic customizer support

                    // OPTIONAL -> Give you extra features
                    'page_priority'      => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'        => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'   => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'          => '',
                    // Specify a custom URL to an icon
                    'last_tab'           => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'          => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'          => '_options',
                    // Page slug used to denote the panel
                    'save_defaults'      => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'       => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'       => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export' => true,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'     => 60 * MINUTE_IN_SECONDS,
                    'output'             => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'         => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'           => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'        => false,
                    // REMOVE

                    // HINTS
                    'hints'              => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );


                // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
                $this->args['share_icons'][] = array(
                    'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
                    'title' => 'Visit us on GitHub',
                    'icon'  => 'el el-github'
                    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
                    'title' => 'Like us on Facebook',
                    'icon'  => 'el el-facebook'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://twitter.com/reduxframework',
                    'title' => 'Follow us on Twitter',
                    'icon'  => 'el el-twitter'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://www.linkedin.com/company/redux-framework',
                    'title' => 'Find us on LinkedIn',
                    'icon'  => 'el el-linkedin'
                );

                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {
                        $v = str_replace( '-', '_', $this->args['opt_name'] );
                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
                } else {
                    $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
                }

                // Add content after the form.
                $this->args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );
            }

        }

        global $reduxConfig;
        $reduxConfig = new wp_Theme_Options();
    }
