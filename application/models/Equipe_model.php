<?php

class Equipe_model extends CI_Model {

    //método que realiza a busca de TODOS(ALL) as provas no db
    function getAll() {
        //nome da tabela no db
        $query = $this->db->get('equipe');

        //result ja nos retorna em formato de array
        return $query->result();
    }

    public function insert($data = array()) {
        $this->db->insert('equipe', $data); //chcma o db e insere os dados vindos do furmulario
        return $this->db->affected_rows(); //retorno das linhas afetadas
    }

    //método que recebe 1 id por parametro e busca PENAS a EQUIPE com este id no db
    public function getOne($id) {
        //faz o filtro por id na consulta sql
        $this->db->where('id', $id); //SELECT * FROM prova WHERE id='valor recebido no parametro'
        //busca a prova na db respeitando o filtro
        $query = $this->db->get('equipe');
        //retorna apenas a primeira linha
        return $query->row(0);
    }
    
    //método que recebe o ID e os dados para alterar e faz o UPDATE na db
    public function update($id,$data = array()){
        if ($id > 0){
            //filtra o prova (id) que será alterado 
            $this->db->where('id', $id); // SELECT * FROM equipe WHERE id = 'valor recebido
            //altera os dados de acordo com oq foi recebido
            $this->db->update('equipe', $data);
            //retorno das linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
    
    public function delete($id){
        if ($id > 0){
            $this->db->where('id',$id);//acha o id para deletar
            $this->db->delete('equipe');
            
            return $this->db->affected_rows(); //retorno das linhas afetadas
        } else {
            return false;
        }
    }

}
