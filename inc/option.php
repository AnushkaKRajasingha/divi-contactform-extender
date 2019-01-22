<?php
/**
 * User: anushkar
 * Date: 12/29/18
 * Time: 7:00 AM
 */

class DiviCoFeSettingsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        // This page will be under "Settings"
        add_options_page(
            'DiviCofe',
            'DiviCofe Settings',
            'manage_options',
            'diviCofe-setting-admin',
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'diviCofe_option_name' );
        ?>
        <div class="wrap">
            <h1>My Settings</h1>
            <form method="post" action="options.php">
                <?php
                // This prints out all hidden setting fields
                settings_fields( 'diviCofe_option_group' );
                do_settings_sections( 'diviCofe-setting-admin' );
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {
        register_setting(
            'diviCofe_option_group', // Option group
            'diviCofe_option_name', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'diviCofe_section_id', // ID
            'Divi Contact Form Settings', // Title
            array( $this, 'print_section_info' ), // Callback
            'diviCofe-setting-admin' // Page
        );

        add_settings_field(
            'module_id', // ID
            'Module ID', // Title
            array( $this, 'module_id_callback' ), // Callback
            'diviCofe-setting-admin', // Page
            'diviCofe_section_id' // Section
        );

        add_settings_field(
            'from_name',
            'From name',
            array( $this, 'from_name_callback' ),
            'diviCofe-setting-admin',
            'diviCofe_section_id'
        );
    }


    public function sanitize( $input )
    {
        return $input;
        $new_input = array();
        if( isset( $input['module_id'] ) )
            $new_input['module_id'] = absint( $input['module_id'] );

        if( isset( $input['title'] ) )
            $new_input['title'] = sanitize_text_field( $input['title'] );

        return $new_input;
    }

    /**
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Enter your contact from information below:';
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function module_id_callback()
    {
        printf(
            '<input type="text" id="module_id" name="my_option_name[module_id]" value="%s" />',
            isset( $this->options['module_id'] ) ? esc_attr( $this->options['module_id']) : ''
        );
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function from_name_callback()
    {
        printf(
            '<input type="text" id="title" name="my_option_name[title]" value="%s" />',
            isset( $this->options['title'] ) ? esc_attr( $this->options['title']) : ''
        );
    }
}

if( is_admin() )
    $divicofe_settings_page = new DiviCoFeSettingsPage();
