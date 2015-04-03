<?php

/**
 * Change Post > Films
 */
class WpEditPostName
{
    private $singular;
    private $plural;

    public function __construct($singular, $plural)
    {
        $this->singular = ucfirst($singular);
        $this->plural = ucfirst($plural);

        add_action('admin_menu', [$this, 'edit_post_menu_label']);
        add_action('init', [$this, 'edit_post_object_label']);
        //add_action('dashboard_glance_items', [$this,'edit_at_a_glance']);
    }

    public function edit_post_menu_label()
    {
        global $menu, $submenu;

        $menu[5][0] = $this->plural;
        $submenu['edit.php'][5][0] = $this->plural;
        $submenu['edit.php'][10][0] = 'Add ' . $this->plural;
    }

    public function edit_post_object_label()
    {
        global $wp_post_types;

        $labels = $wp_post_types['post']->labels;
        $labels->name = $this->plural;
        $labels->singular_name = $this->singular;
        $labels->add_new = 'Add ' . $this->plural;
        $labels->add_new_item = 'Add ' . $this->plural;
        $labels->edit_item = 'Edit ' . $this->singular;
        $labels->new_item = $this->singular;
        $labels->view_item = 'View ' . $this->singular;
        $labels->search_items = 'Search ' . $this->plural;
        $labels->not_found = 'No ' . strtolower($this->plural) . ' found';
        $labels->not_found_in_trash = 'No ' . strtolower($this->plural) . ' found in Trash';
    }

    /**
    * Add items to the at-a-glance section within the dashboard
    */
    public function edit_at_a_glance()
    {
        //$post_types = get_post_types(["public" => true]);

        //var_dump($post_types);
    }
}
