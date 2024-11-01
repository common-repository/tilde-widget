<?php
function tilde_widget_settings_page() {
  ?>
      <div class="wrap">
      <h1>Tilde Widget indstillinger</h1>
      <form method="post" action="options.php">
          <?php
              settings_fields("section");
              do_settings_sections("theme-options");      
              submit_button(); 
          ?>          
      </form>
    </div>
  <?php
}

function add_tilde_widget_menu_item() {
  add_menu_page(
    "Tilde widget", 
    "Tilde", 
    "manage_options", 
    "tilde-widget-settings", 
    "tilde_widget_settings_page", 
    null, 
    99
  );
}

add_action("admin_menu", "add_tilde_widget_menu_item");

function display_tilde_unique_id() {
  ?>
      <input type="text" name="widget_id" id="widget_id" value="<?php echo get_option('widget_id'); ?>" size="60" />
    <?php
}

function display_tilde_widget_fields() {
  add_settings_section("section", "Alle indstillinger", null, "theme-options");
  
  add_settings_field("widget_id", "Tilde Widget ID", "display_tilde_unique_id", "theme-options", "section");

  register_setting("section", "widget_id");
}

add_action("admin_init", "display_tilde_widget_fields");
