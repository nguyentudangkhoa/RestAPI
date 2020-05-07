<?php
class API extends DB{
    public function getUserStmt(){
        $api = array();
        $sql = "SELECT * FROM users ORDER BY id";
        $stmt = $this->Connect()->prepare($sql);
        $stmt->execute();
        while($name = $stmt->fetch()){
            $api[$name['id']] = array(
                'id'      => $name['id'],
                'username'=>$name['username'],
                'password'=>$name['password']
            );
        }
        return json_encode($api);
    }
    public function ShowCStmt($userName){
        $api = array();
        $sql = "SELECT * FROM users WHERE username=?";
        $stmt = $this->Connect()->prepare($sql);
        $stmt->execute([$userName]);// thực thi dấu ?
        $names = $stmt->fetchAll();
        foreach($names as $name){
            $api[$name['id']] = array(
                'id'      => $name['id'],
                'username'=>$name['username'],
                'password'=>$name['password']
            );
        }
        return json_encode($api);
    }
}
