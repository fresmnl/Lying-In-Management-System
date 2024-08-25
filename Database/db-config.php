
<?php

class Database
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $pdo;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $dsn = "mysql:host=$this->host;dbname=$this->database;charset=utf8mb4";
        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }

    public function query($query, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            echo "Query Error: " . $e->getMessage();
            return false;
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    public function cleanStr($value)
    {
        return trim($value);
    }
    function NumberOfAccount()
    {
        $sql = "SELECT COUNT(*) FROM user_account";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn() + 1;
    }
    function NumberOfPatient()
    {
        $sql = "SELECT COUNT(*) FROM patient_info";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn() + 1;
    }
    function NumberOfHealthFacility()
    {
        $sql = "SELECT COUNT(*) FROM health_facility_info";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn() + 1;
    }
    function generateHealthFacilityId($currentCount)
    {
        $year = date('Y');
        $month = date('m');
        $sequentialNumber = str_pad($currentCount, 2, '0', STR_PAD_LEFT);
        $patientId = "HF{$year}{$month}-{$sequentialNumber}";
        return $patientId;
    }
    function generatePatientId($currentCount)
    {
        $year = date('Y');
        $month = date('m');
        $sequentialNumber = str_pad($currentCount, 4, '0', STR_PAD_LEFT);
        $patientId = "P{$year}{$month}-{$sequentialNumber}";
        return $patientId;
    }
    function generateAccountId($currentCount)
    {
        $year = date('Y');
        $month = date('m');
        $sequentialNumber = str_pad($currentCount, 4, '0', STR_PAD_LEFT);
        $accountId = "A{$year}{$month}-{$sequentialNumber}";
        return $accountId;
    }

    function startTransaction()
    {
        return $this->pdo->beginTransaction();
    }

    function proceed()
    {
        $this->pdo->commit();
    }
    function terminateTransaction()
    {
        $this->pdo->rollBack();
    }
    function getAdminUsername($username, $role)
    {
        $sql = "SELECT FROM user_account WHERE Username = :username AND Role = :role";
        $params = [':username' => $username, ':role' => $role];
        $stmt = $this->query($sql, $params);

        if ($stmt) {
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            return $admin['Username'];
        }else{
            return "Data Parsing Error!";
        }
    }
}
