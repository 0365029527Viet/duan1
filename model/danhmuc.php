<?php
    function insert_dm($tendanhmuc){
        $sql = "insert into danhmuc values (null, '$tendanhmuc')";
        pdo_execute($sql);
    }
    function delete_dm($id){
        $sql = "delete from danhmuc where id ='$id'";
        pdo_execute($sql);
    }
    function load_dm_admin(){
        $sql = "select * from danhmuc";
        $rows=pdo_query($sql);
        return $rows;
    }
    function load_dm(){
        $sql = "select * from danhmuc order by id desc";
        $rows=pdo_query($sql);
        return $rows;
    }
    function load_dm_ten($id){
        $sql = "select * from danhmuc where id=$id";
        $rows=pdo_query($sql);
        return $rows;
    }
    function updatedm($tendanhmuc,$id){
        $sql= "update danhmuc set tendanhmuc='$tendanhmuc' where id='$id'";
        pdo_execute($sql);
    }
?>