<?php

namespace App\Controllers;

use App\Models\AnotacoesModel;

class Fases extends BaseController {

    private function obterAnotacoes() {
        $anotacoesModel = new AnotacoesModel();
        return $anotacoesModel->readAnotacao();
    }

    private function carregarView($view) {
        $data['anotacoes'] = $this->obterAnotacoes();
        return view($view, $data);
    }

    public function fase1() {
        return $this->carregarView('fase1');
    }

    public function fase2() {
        return $this->carregarView('fase2');
    }

    public function fase3() {
        return $this->carregarView('fase3');
    }

    public function fase4() {
        return $this->carregarView('fase4');
    }

    public function fase5() {
        return $this->carregarView('fase5');
    }
}