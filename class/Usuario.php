<?php

class Usuario {
        
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdUsuario(){
        return $this->idusuario;
    }

    public function setIdUsuario($value){
        $this->idusuario = $value;
    }

    public function getDesLogin(){
        return $this->deslogin;
    }

    public function setDesLogin($value){
        $this->deslogin = $value;
    }

    public function getDesSenha(){
        return $this->dessenha;
    }

    public function setDesSenha($value){
        $this->dessenha = $value;
    }

    public function getDtCadastro(){
        return $this->dtcadastro;
    }

    public function setDtCadastro($value){
        $this->dtcadastro = $value;
    }


}

?>