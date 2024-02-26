<?php
include('db.php');
class Crud extends Database{
    public function create($table,$data)
    {
        $sql = "INSERT INTO " . $table . "(". implode(",",array_keys($data)) .") VALUES ('" . implode("','",array_values($data)) . "')";
        // echo $sql;
        return mysqli_query($this->conn,$sql);
    }
    public function read($table)
    {
        $sql = "SELECT * FROM " . $table;
        return mysqli_query($this->conn,$sql);
    }
    public function destroy($table,$where){
        // DELETE FROM user WHERE id='id'
        foreach($where as $key => $value){  
            $a = $key."='".$value."'";
    }
     $sql = "DELETE FROM " . $table . " WHERE " .$a;
     return mysqli_query($this->conn,$sql);
    }
    public function edit($table,$where){
        // SELECT * FROM user WHERE id='id'
        foreach($where as $key => $value){  
            $a = $key."='".$value."'";
    }
     $sql = "SELECT * FROM " . $table . " WHERE " .$a;
     return mysqli_query($this->conn,$sql);
    // echo $sql;
    }
    public function update($table, $data, $where){
        // UPDATE user SET name='name', email='email', ... WHERE id='$id';
        $a = "";
        foreach ($where as $key => $value) {
            $a = $key . "='" . $value . "'";
        }
    
        $b = "";
        foreach ($data as $key => $value) {
            $b .= $key . "='" . $value . "',";
        }
        $c = rtrim($b, ',');
        
        $sql = "UPDATE " . $table . " SET " . $c . " WHERE " . $a;
    
        return mysqli_query($this->conn, $sql);
    }
    
}
$obj = new Crud();

if(isset($_POST['name']) && $_POST['email']){
$myarray =['name'=>$_POST['name'], 'email'=>$_POST['email'],
'created_date'=>date('Y-m-d'),'modified_date'=>date('Y-m-d')];
if($obj->create("user",$myarray)){
    header("Location:index.php");
}
}
if(isset($_GET['id'])){
 $condition = ['id'=>$_GET['id']];
 if($obj->destroy("user",$condition)){
    header("Location:index.php");
 }
}

if(isset($_POST['uname']) && $_POST['uemail']){
    $condition = ['id'=>$_POST['uid']];
    $myarray =['name'=>$_POST['uname'], 'email'=>$_POST['uemail'],
    'created_date'=>date('Y-m-d'),'modified_date'=>date('Y-m-d')];
if($obj->update("user",$myarray,$condition)){
    header("Location:index.php");
}
}
?>