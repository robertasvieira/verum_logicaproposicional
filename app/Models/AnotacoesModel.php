<?php

namespace App\Models;

use CodeIgniter\Model;

class AnotacoesModel extends Model {

    protected $table = 'anotacoes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo', 'conteudo'];

    public function createAnotacao($data){
        return $this->insert($data);
    }

    public function readAnotacao(){
        return $this->findAll();
    }
    
    public function updateAnotacao($data) {
        if (!empty($data)) {
            
            $id = $data['id'];
            unset($data['id']);
            $this->where('id', $id)->set($data)->update();
    
            return true; 
        }
        return false;
    }

    public function deleteAnotacao($id) {
        return $this->delete($id);
    }
}