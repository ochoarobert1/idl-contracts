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

class Idl_Contracts_Tours_Metaboxes
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
     * Method idl_contracts_tours_metaboxes
     * Register meta box(es).
     *
     * @return void
     */
    public function idl_contracts_tours_metaboxes()
    {
        add_meta_box(
            'idl_tours_metabox',
            __('Tour Information', 'idl-contracts'),
            array($this, 'idl_tours_metabox_callback'),
            'idltours'
        );
    }

    /**
     * Method idl_tours_metabox_callback
     *
     * @param $post object WP_Post [https://developer.wordpress.org/reference/classes/wp_post/]
     *
     * @return void
     */
    public function idl_tours_metabox_callback($post)
    {
        wp_nonce_field('idl_tours_nonce_save', 'idl_tours_nonce');
        ?>
<div class="idl-contracts-input-wrapper">
    <label for="tour_artist">
        <?php _e('Tour Artist', 'idl-contracts'); ?>:
    </label>
    <?php $value = get_post_meta($post->ID, 'tour_artist', true); ?>
    <input type="text" id="tour_artist" name="tour_artist" value="<?php echo esc_attr($value); ?>" />
</div>
<div class="idl-contracts-input-wrapper">
    <label for="tour_start">
        <?php _e('Tour Start', 'idl-contracts'); ?>:
    </label>
    <?php $value = get_post_meta($post->ID, 'tour_start', true); ?>
    <input type="date" id="tour_start" name="tour_start" min="<?php echo date('Y-m-d'); ?>" value="<?php echo esc_attr($value); ?>" />
</div>
<div class="idl-contracts-input-wrapper">
    <label for="tour_end">
        <?php _e('Tour End', 'idl-contracts'); ?>:
    </label>
    <?php $value = get_post_meta($post->ID, 'tour_end', true); ?>
    <input type="date" id="tour_end" name="tour_end" min="<?php echo date('Y-m-d'); ?>" value="<?php echo esc_attr($value); ?>" />
</div>
<?php
    }

    /**
     * Method idl_contracts_tours_save_metabox
     *
     * @param $post_id integer
     *
     * @return void
     */
    public function idl_contracts_tours_save_metabox($post_id)
    {
        // Add nonce for security and authentication.
        $nonce_name   = isset($_POST['idl_tours_nonce']) ? $_POST['idl_tours_nonce'] : '';
        $nonce_action = 'idl_tours_nonce_save';

        // Check if nonce is valid.
        if (! wp_verify_nonce($nonce_name, $nonce_action)) {
            return;
        }

        // Check if user has permissions to save data.
        if (! current_user_can('edit_post', $post_id)) {
            return;
        }

        // Check if not an autosave.
        if (wp_is_post_autosave($post_id)) {
            return;
        }

        // Check if not a revision.
        if (wp_is_post_revision($post_id)) {
            return;
        }

        // Update the meta fields.
        $mydata = sanitize_text_field($_POST['tour_artist']);
        update_post_meta($post_id, 'tour_artist', $mydata);
    }
}
