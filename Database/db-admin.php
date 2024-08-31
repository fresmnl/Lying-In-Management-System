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
    private $HealthFacility = "Health Facility";
    private $verified = "Verified";
    private $Patient = "Patient";
    const UNAUTHORIZED = "Unauthorized";

    const AUTHORIZED = "Authorized";
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
        $params = [':role' => $this->HealthFacility];
        $stmt = $this->db_admin->query($sql, $params);
        return $stmt->fetchColumn();
    }

    function getAuthorizedHealthFacilityAccount()
    {
        $sql = "SELECT COUNT(*) FROM user_account WHERE Role = :role AND Status = :authorized";
        $params = [':role' => $this->HealthFacility, ':authorized' => $this::AUTHORIZED];
        $stmt = $this->db_admin->query($sql, $params);
        return $stmt->fetchColumn();
    }
    function getUnauthorizedHealthFacilityAccount()
    {
        $sql = "SELECT COUNT(*) FROM user_account WHERE Role = :role AND Status = :unauthorized";
        $params = [':role' => $this->HealthFacility, ':unauthorized' => $this::UNAUTHORIZED];
        $stmt = $this->db_admin->query($sql, $params);
        return $stmt->fetchColumn();
    }
    function getAllPatient()
    {
        $sql = "SELECT COUNT(*) FROM user_account WHERE Role = :role";
        $params = [':role' => $this->Patient];
        $stmt = $this->db_admin->query($sql, $params);
        return $stmt->fetchColumn();
    }
    function getHealthFacilityNames()
    {
        $sql = "SELECT Health_Facility_Name FROM health_facility_info";
        $stmt = $this->db_admin->query($sql);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $names = [];

        foreach ($rows as $row) {
            if (isset($row['Health_Facility_Name'])) {
                $names[] = $row['Health_Facility_Name'];
            }
        }

        return $names;
    }

    function getNumberOfHFAccount(){
        return $this->db_admin->NumberOfHealthFacility() - 1;
    }
    function getNumberOfPatientAccount(){
        return $this->db_admin->NumberOfPatient() - 1;
    }

    function getHealthFacilityInfoAndAccount(){
        $sql = "SELECT * FROM health_facility_info INNER JOIN user_account ON health_facility_info.Account_Id = user_account.Account_Id";
        $stmt = $this->db_admin->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function getPatientAccount(){
        $sql = "SELECT * FROM patient_info INNER JOIN user_account ON patient_info.Account_Id = user_account.Account_Id";
        $stmt = $this->db_admin->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
