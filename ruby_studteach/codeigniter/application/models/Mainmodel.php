<?php
class Mainmodel extends CI_model
{
public function regist($a)
{
    $this->db->insert("form",$a);
}
public function encpass($pass)
{
    return password_hash($pass,PASSWORD_BCRYPT);
}
public function view1()
{
    $this->db->select('*');
    $qry=$this->db->get("form");
    return $qry;
}
public function singledetails($id)
{
    $this->db->select('*');
    $this->db->where("id",$id);
   $qry= $this->db->get("form");
   return $qry;
}
public function singledata()
{
    $qry=$this->db->get("form");
    return $qry;
}
public function updatedetails($a,$id)
{
    $this->db->select('*');
    $this->db->where("id",$id);
   $qry= $this->db->update("form",$a);
   return $qry;
}
public function deletedetails($id)
{
    $this->db->where("id",$id);
    $this->db->delete("form");
}

public function aprovedetails($id)
{
    /*$this->db->select('*');*/
    $qry=$this->db->where("id",$id);
    $qry= $this->db->set("status",'1');
   $qry= $this->db->update("form");
   return $qry;
}
public function rejecteddetails($id)
{
    /*$this->db->select('*');*/
    $qry=$this->db->where("id",$id);
    $qry= $this->db->set("status",'2');
   $qry= $this->db->update("form");
   return $qry;
}
public function getuserid($email)
{
    $this->db->select('id');
    $this->db->from("form");
    $this->db->where("email",$email);
    return $this->db->get()->row('id');
}
public function getuser($id)
{
    $this->db->select('*');
    $this->db->from("form");
    $this->db->where('id',$id);
    return $this->db->get()->row();

}
public function selectpass($email,$password)
{
    $this->db->select('password');
    $this->db->from("form");
    $this->db->where("email",$email);
    $qry=$this->db->get()->row('password');
    return $this->verifypass($password,$qry);
}
public function verifypass($password,$qry)
{
    return password_verify($password,$qry);
}

public function proinsert($a,$b)
{
    $this->db->insert("prologin",$b);
    $loginid=$this->db->insert_id();
    $a['loginid']=$loginid;
    $this->db->insert("project",$a);
    return $insert_id=$this->db->insert_id();
}
public function encpass2($pass)
{
    return password_hash($pass,PASSWORD_BCRYPT);
}
public function view()
{
    $this->db->select('*');
    $this->db->join('prologin','prologin.id=project.loginid','inner');
    $qry=$this->db->get("project");
    return $qry;
}
public function aprovedetailss($loginid)
{
    /*$this->db->select('*');*/
    $qry=$this->db->where("id",$loginid);
    $qry= $this->db->set("status",'1');
   $qry= $this->db->update("prologin");
   return $qry;
}
public function rejecteddetailss($loginid)
{
    /*$this->db->select('*');*/
    $qry=$this->db->where("id",$loginid);
    $qry= $this->db->set("status",'2');
   $qry= $this->db->update("prologin");
   return $qry;
}
public function teachinsert($c,$d)
{
    $this->db->insert("prologin",$d);
    $loginid=$this->db->insert_id();
    $c['loginid']=$loginid;
    $this->db->insert("teacherreg",$c);
    return $insert_id=$this->db->insert_id();
}
public function encpass3($pass)
{
    return password_hash($pass,PASSWORD_BCRYPT);
}
public function getuseridd($email)
{
    $this->db->select('id');
    $this->db->from("prologin");
    $this->db->where("email",$email);
    return $this->db->get()->row('id');
}
public function getuserr($id)
{
    $this->db->select('*');
    $this->db->from("prologin");
    $this->db->where('id',$id);
    return $this->db->get()->row();

}
public function selectpas($email,$password)
{
    $this->db->select('password');
    $this->db->from("prologin");
    $this->db->where("email",$email);
    $qry=$this->db->get()->row('password');
    return $this->verifypass($password,$qry);
}
//public function verifypass($password,$qry)
//{
    //return password_verify($password,$qry);
//}

}


?>