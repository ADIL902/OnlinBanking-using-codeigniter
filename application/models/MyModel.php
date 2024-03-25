<?php
class MyModel extends CI_Model{
    // create Account=============================================
public function getAccount()
{
    $rs=$this->db->get('account');
    return $rs-> result_array();
}
public function cAccount($data)
{
    $this->db->insert('account',$data);
}

// Withdral--And Deposite-----------------------------------------

public function checkAccount($con,)
{
    $rs=$this->db->get_where("account",$con);
    return $rs->result_array();
}
public function updateAccount($con,$data,)

{
    $this->db->update("account",$data,$con,);
   
}
 //pin change================================
public function pinChange($con){
    $rs=$this->db->get_where("account",$con);
    return $rs->result_array();
}

public function updatePin($con,$data)
{
    $this->db->update("account",$data,$con);
}
 
//Balance Enq=====================================================

 public function checkBalance($con)
 {
    $rs=$this->db->get_where("account",$con);
    return $rs->result_array();
 }
 public function showBalance($con,$data)
{
    $this->db->update("account",$data,$con);
}
 









}






















































?>