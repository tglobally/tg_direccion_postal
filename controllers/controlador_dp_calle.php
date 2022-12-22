<?php
namespace tglobally\tg_direccion_postal\controllers;

use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_dp_calle extends \controllers\controlador_dp_calle {

    public array $sidebar = array();

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $html_base = new html();
        parent::__construct( link: $link, paths_conf: $paths_conf);
        $this->titulo_lista = 'Calles';

        $this->sidebar['lista']['titulo'] = "Calle";
        $this->sidebar['lista']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_seccion_active: true,
                menu_lateral_active: true));

        $this->sidebar['alta']['titulo'] = "Alta Calle";
        $this->sidebar['alta']['stepper_active'] = true;
        $this->sidebar['alta']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_lateral_active: true),
            $this->menu_item(menu_item_titulo: "Nueva Seccion", link: $this->link_alta));

        $this->sidebar['modifica']['titulo'] = "Modifica Calle";
        $this->sidebar['modifica']['stepper_active'] = true;
        $this->sidebar['modifica']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_alta,menu_lateral_active: true),
            $this->menu_item(menu_item_titulo: "Nueva Seccion", link: $this->link_alta,menu_seccion_active: true));

    }

    public function menu_item(string $menu_item_titulo, string $link, bool $menu_seccion_active = false,bool $menu_lateral_active = false): array
    {
        $menu_item = array();
        $menu_item['menu_item'] = $menu_item_titulo;
        $menu_item['menu_seccion_active'] = $menu_seccion_active;
        $menu_item['link'] = $link;
        $menu_item['menu_lateral_active'] = $menu_lateral_active;

        return $menu_item;
    }

}
