<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 13.07.18
 * Time: 15:11
 */

class QuerryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }

    public function fetchAllUsers()
    {
        $statement= $this->pdo->prepare('select u.id,u.username,u.first_name,u.last_name,u.email,u.id_firmy,f.nazwa from users u join firmy f on u.id_firmy = f.id');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function fetchAllWorkers()
    {
        $statement= $this->pdo->prepare('select h.id,imie,id_firmy,nazwa,telefon,email from handlowcy h join firmy f on h.id_firmy = f.id order by f.id;');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function fetchAllCompanies()
    {
        $statement= $this->pdo->prepare('select id,nazwa,adres,NIP from firmy');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function fetchUser($id)
    {
        $statement= $this->pdo->prepare('select u.id,u.username,u.first_name,u.last_name,u.email,u.id_firmy,f.nazwa from users u join firmy f on u.id_firmy = f.id where u.id = ?');
        $statement->execute(array($id));
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function fetchWorker($id)
    {
        $statement=$this->pdo->prepare('select * from handlowcy where id = ?');
        $statement->execute(array($id));
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function fetchCompany($id)
    {
        $statement=$this->pdo->prepare('select * from firmy where id = ?');
        $statement->execute(array($id));
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function fetechContacts($id)
    {
        $statement=$this->pdo->prepare('select * from kontakty where id_handlowca = ?');
        $statement->execute(array($id));
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function editUser($parameters)
    {
        try{
            //die(var_dump($parameters));
            $statement =$this->pdo->prepare('UPDATE users SET username=?,first_name=?,last_name=?,email=?,id_firmy=?  where id = ?');
            $statement->execute($parameters);

        } catch (Exception $e){

            die("Something's not quite right! An illusion! What are you hiding!");
        }

    }

    public function editWorker($parameters)
    {
        try{
            //die(var_dump($parameters));
            $statement =$this->pdo->prepare('UPDATE handlowcy SET imie = ? ,email = ? ,telefon = ? where id = ?');
            $statement->execute($parameters);

        } catch (Exception $e){

            die("Something's not quite right! An illusion! What are you hiding!");
        }

    }

    public function editCompany($parameters)
    {
        try{
            //die(var_dump($parameters));
            $statement =$this->pdo->prepare('UPDATE firmy SET nazwa = ? ,adres = ? ,nip = ? where id = ?');
            $statement->execute($parameters);

        } catch (Exception $e){

            die("Something's not quite right! An illusion! What are you hiding!");
        }

    }

    public function login($username)
    {
        $statement =$this->pdo->prepare('select id,username,password,permission,id_firmy from users where username = ?');
        $statement->execute(array($username));
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table,$parameters)
    {
        try{
            $sql =sprintf(
                'insert into %s (%s) values (%s)',
                $table,
                implode(',',array_keys($parameters)),
                ':'.implode(', :',array_keys($parameters))
            );
            $statement=$this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e){

            die("Something's not quite right! An illusion! What are you hiding!");
        }


    }

    public function fetchtoreset($parameters)
    {
        try{
            $statement =$this->pdo->prepare('select * from users where email = ?');
            $statement->execute(array($parameters));
            return $statement->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e){

            die("Something's not quite right! An illusion! What are you hiding!");
        }

    }
    public function reset($parameters)
    {
        try{
            //die(var_dump($parameters));
            $statement =$this->pdo->prepare('UPDATE users SET password = ? where id = ?');
            $statement->execute($parameters);

        } catch (Exception $e){

            die("Something's not quite right! An illusion! What are you hiding!");
        }

    }


}
//UPDATE table_name
//SET column1 = value1, column2 = value2, ...
//WHERE condition;