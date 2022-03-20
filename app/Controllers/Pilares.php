<?php

namespace App\Controllers;

class Pilares extends BaseController {

    public function index() {
		$data['contenido'] = 'pilares_site';
        return view('template', $data);
    }

    public function incidentes() {
		$data['contenido'] = 'pilares/incidentes';
        return view('template', $data);
    }

    public function concientizacion() {
		$data['contenido'] = 'pilares/concientizacion';
        return view('template', $data);
    }

    public function politicas() {
		$data['contenido'] = 'pilares/politicas';
        return view('template', $data);
    }

    public function infraestructura() {
		$data['contenido'] = 'pilares/infraestructura';
        return view('template', $data);
    }

}
