<?php

class llibre extends connexio{
    //Atributs
    var $lli_idllibre;
    var $lli_llibre;
    
    //constructor
    function llibre($ruta="../../"){
        parent::connexio($ruta);
    }
    
    function inicialitza ($id){
        $this->lli_idllibre = $id;
        echo "fora";
        if ($this->lli_idllibre == 0){
            $this->lli_llibre = "";
        } else {
            echo "dins";
            $sql="SELECT LLIBRES.LLI_IDLLIBRE, LLIBRES.LLI_LLIBRE FROM LLIBRES WHERE (LLIBRES.LLI_IDLLIBRE=".$id.")";
            $rs=$this->DB_Select($sql);
            $rs=$this->DB_Fetch($rs);
            $this->lli_llibre = $rs['LLI_LLIBRE'];
        }
    }
    
    function carregaValors($id,$llibre){
        $this->set_lli_idllibre($id);
        $this->set_lli_llibre($llibre);
    }
    
    function get_lli_idllibre(){
        return $this->lli_idllibre;
    }
    
    function get_lli_llibre(){
        return $this->lli_llibre;
    }
    
    function set_lli_idllibre($valor){
        $this->lli_idllibre=$valor;
    } 
    
    function set_lli_llibre($valor){
        $this->lli_llibre=$valor;
    }
    
    function esborra(){
        $sql="DELETE FROM LLIBRES WHERE LLI_IDLLIBRE=".$this->lli_idllibre;
        $this->DB_Execute($sql);
    }
    
    function modifica(){
        $sql="UPDATE LLIBRES SET LLI_IDLLIBRE='".$this->lli_llibre."' WHERE LLI_IDllibre=".$this->lli_idllibre;
        $this->DB_Execute($sql);
        return $this->lli_idllibre;
    }
    
    function afegeix(){
        $sql="INSERT INTO LLIBRES (LLI_LLIBRE) VALUES ('".$this->lli_llibre."')";
        $this->DB_Execute($sql);
        
        $sql_id="SELECT max(LLI_IDLLIBRE) AS LLI_IDLLIBRE FROM LLIBRES";
        $rs_id=$this->DB_Select($sql_id);
        $rs_id=$this->DB_Fetch($rs_id);
        $this->lli_idllibre=$rs_id['LLI_IDLLIBRE'];
        return $this->lli_idllibre_idllibre;
    }
    
    
}

?>