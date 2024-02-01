<?php

namespace App\Controllers;

use App\Models\AnotacoesModel;

class Anotacoes extends BaseController {
   
    public function create() {
        $anotacoesModel = new AnotacoesModel();
        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'conteudo' => $this->request->getPost('conteudo')
        ];
        $anotacoesModel->createAnotacao($data);

        $referer = $_SERVER['HTTP_REFERER'];
        return redirect()->to($referer);
    
    }

    public function update() {
        $anotacoesModel = new AnotacoesModel();
    
        $id = $this->request->getPost('id');
        $titulo = $this->request->getPost('tituloEditar');
        $conteudo = $this->request->getPost('conteudoEditar');
    
        $anotacoesModel->where('id', $id)->set(['titulo' => $titulo, 'conteudo' => $conteudo])->update();
    
        $referer = $_SERVER['HTTP_REFERER'];
        return redirect()->to($referer);
    }
    
    public function delete($id) {
        $anotacoesModel = new AnotacoesModel();
        
        $anotacoesModel->deleteAnotacao($id);

        $referer = $_SERVER['HTTP_REFERER'];
        return redirect()->to($referer);
    } 
}
