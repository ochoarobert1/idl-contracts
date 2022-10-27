<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://robertochoaweb.com
 * @since      1.0.0
 *
 * @package    Idl_Contracts
 * @subpackage Idl_Contracts/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Idl_Contracts
 * @subpackage Idl_Contracts/admin
 * @author     Robert Ochoa <ochoa.robert1@gmail.com>
 */
class Idl_Contracts_Admin
{
    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Idl_Contracts_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Idl_Contracts_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/idl-contracts-admin.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Idl_Contracts_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Idl_Contracts_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/idl-contracts-admin.js', array( 'jquery' ), $this->version, false);
    }

    /**
     * Method idl_contracts_admin_menu_page
     * Main menu section for IDL Contracts
     *
     * @return void
     */
    public function idl_contracts_admin_menu_page()
    {
        add_menu_page(
            __('IDL Contracts', 'idl-contracts'),
            __('IDL Contracts', 'idl-contracts'),
            'manage_options',
            'idl-contracts-dashboard',
            array($this, 'idl_contracts_admin_dashboard'),
            plugins_url($this->plugin_name . '/assets/logo-small.png'),
            120
        );

        add_submenu_page(
            'idl-contracts-dashboard',
            __('Tours', 'idl-contracts'),
            __('Tours', 'idl-contracts'),
            'manage_options',
            'edit.php?post_type=idltours',
            '',
            null
        );

        add_submenu_page(
            'idl-contracts-dashboard',
            __('Contracts', 'idl-contracts'),
            __('Contracts', 'idl-contracts'),
            'manage_options',
            'edit.php?post_type=idlcontracts',
            '',
            null
        );
    }

    /**
     * Method idl_contracts_admin_dashboard
     * Main dashboard
     *
     * @return void
     */
    public function idl_contracts_admin_dashboard()
    {
        ob_start();
        ?>
<div class="wrap wrap-idl">
    <header class="page-header">
        <h1 class="page-title"><?php echo get_admin_page_title(); ?></h1>
        <img src="<?php echo plugins_url($this->plugin_name . '/assets/logo-black.png'); ?>" alt="IDL Entertainment" />
    </header>
</div>
<?php
        $content = ob_get_clean();
        echo $content;
    }
}
