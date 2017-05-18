<?php
 /*******************************************************************************

 * Copyright IBM Corp. 2017
 *

 * Licensed under the Apache License, Version 2.0 (the "License");

 * you may not use this file except in compliance with the License.

 * You may obtain a copy of the License at

 *

 * http://www.apache.org/licenses/LICENSE-2.0

 *

 * Unless required by applicable law or agreed to in writing, software

 * distributed under the License is distributed on an "AS IS" BASIS,

 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.

 * See the License for the specific language governing permissions and

 * limitations under the License.

 *******************************************************************************/
// create custom plugin settings menu
add_action('admin_menu', 'wch_assetpicker_plugin_create_menu');

function wch_assetpicker_plugin_create_menu() {

	//create new top-level menu
//	add_menu_page('Asset Palette Settings', 'Asset Palette Settings', 'administrator', __FILE__, 'my_cool_plugin_settings_page' , plugins_url('/icon/wchIcon-icon.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_my_cool_plugin_settings' );
	
}

add_action( 'admin_menu', 'my_plugin_menu' );

function my_plugin_menu() {
	add_options_page( 'Asset Palette Settings Options', 'Asset Palette', 'manage_options', 'my-unique-identifier', 'my_cool_plugin_settings_page' );
}

function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

function register_my_cool_plugin_settings() {
	//register our settings
	register_setting( 'wch-assetpicker-settings-group', 'apiUrl' );
}

function my_cool_plugin_settings_page() {
?>
<div class="wrap">
<h1>WCH Asset Picker</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'wch-assetpicker-settings-group' ); ?>
    <?php do_settings_sections( 'wch-assetpicker-settings-group' ); ?>
    <table class="form-table">        
        <tr valign="top">
        <th scope="row">APIurl</th>
        <td><input type="text" name="apiUrl" value="<?php echo esc_attr( get_option('apiUrl') ); ?>" /></td>
        </tr>        
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>