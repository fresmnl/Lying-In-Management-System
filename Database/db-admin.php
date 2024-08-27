<?php
require '../Database/db-config.php';

class Admin
{

    private $db_admin;
    // Database configuration
    private $host = 'localhost';      // Database host
    private $dbname = 'db_lyingin'; // Database name
    private $username = 'root'; // Database username
    private $password = ''; // Database password
    private $role = "Health Facility";
    private $verified = "Verified";
    private $non_verified = "Non Verified";
    public function __construct()
    {
        $this->db_admin = new Database(
            $this->host,
            $this->username,
            $this->password,
            $this->dbname
        );
    }

    function getAllHealthFacilityAccount()
    {
        $sql = "SELECT COUNT(*) FROM user_account WHERE Role = :role";
        $params = [':role' => $this->role];
        $stmt = $this->db_admin->query($sql, $params);
        return $stmt->fetchColumn();
    }

    function getVerifiedHealthFacilityAccount()
    {
        $sql = "SELECT COUNT(*) FROM user_account WHERE Role = :role AND Status = :verified";
        $params = [':role' => $this->role, ':verified' => $this->verified];
        $stmt = $this->db_admin->query($sql, $params);
        return $stmt->fetchColumn();
    }
    function getNonVerifiedHealthFacilityAccount()
    {
        $sql = "SELECT COUNT(*) FROM user_account WHERE Role = :role AND Status = :non_verified";
        $params = [':role' => $this->role, ':non_verified' => $this->non_verified];
        $stmt = $this->db_admin->query($sql, $params);
        return $stmt->fetchColumn();
    }
}
