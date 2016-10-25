<?php

class Enquiry
{
    private $email;
    private $firstName;
    private $lastName;
    private $message;
    private $id;
    private $table = "messages";
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    function save(){

        $conn = mysqli_connect('localhost', 'root', '', 'enquiry');

        if( empty( $this->getId())) {

            $query = "insert into ". $this->table ." ( email, first_name,last_name, message ) VALUES ( 
        '". $this->getEmail()."',
        '". $this->getFirstName()."',
        '". $this->getLastName()."',
        '". $this->getMessage()."')";

        } else {

            $query = "update ". $this->table ." set 
            email = '". $this->getEmail() ."',
            first_name = '". $this->getFirstName() ."',
            last_name = '". $this->getLastName() ."',
            message = '". $this->getMessage() ."'
            where id = '". $this->getId() ."'
            ";
        }




//        die( $query  );
        return mysqli_query( $conn, $query );
    }

    function findById( $id ) {
        $conn = mysqli_connect('localhost', 'root', '', 'enquiry');

        $query = "select * from ". $this->table ." where id = '". $id ."'";
        $result = mysqli_query( $conn, $query );
        $row = mysqli_fetch_assoc( $result );
        $enquiry = new self();
        $enquiry->setId($row['id']);
        $enquiry->setFirstName( $row['first_name']);
        $enquiry->setLastName( $row['last_name']);
        $enquiry->setEmail( $row['email']);
        $enquiry->setMessage( $row['message']);
        return $enquiry;

    }

    function delete() {

        $conn = mysqli_connect('localhost', 'root', '', 'enquiry');

        $query = "delete from ". $this->table." where id = '". $this->getId() ."'";
        return mysqli_query( $conn, $query );
    }

    function getAll() {

        $conn = mysqli_connect('localhost', 'root', '', 'enquiry');

        $query = "select * from ". $this->table;
        $result = mysqli_query( $conn, $query );
        $queries = [];
        while( $row = mysqli_fetch_assoc( $result ) ) {

            $enquiry = new self();
            $enquiry->setId($row['id']);
            $enquiry->setFirstName( $row['first_name']);
            $enquiry->setLastName( $row['last_name']);
            $enquiry->setEmail( $row['email']);
            $enquiry->setMessage( $row['message']);
            $queries[] =  $enquiry;
        }
        return $queries;
    }

    function getName() {

        return $this->getFirstName() . " " . $this->getLastName();
    }

}