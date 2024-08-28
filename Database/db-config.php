
<?php

class Database
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $pdo;

    const NON_VERIFIED = 'Non-Verified';
    const UNAUTHORIZED = 'Unauthorized';
    const VERIFIED = 'Verified';
    const PATIENT = 'Patient';
    const ADMIN = 'Admin';
    const HEALTH_FACILITY = 'Health Facility';
    

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

    function getCurrentDate($dataFormat = 'd/m/Y')
    {
        return Date($dataFormat);
    }
    function emailExists($email)
    {
        $sql = "SELECT * FROM user_account WHERE Email = :email";
        $stmt = $this->query($sql, [':email' => $email]);
        return $stmt->fetchColumn() > 0;
    }
    function getHealthFacilityNames()
    {
        $sql = "SELECT Health_Facility_Name FROM health_facility_info";
        $stmt = $this->query($sql);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $names = [];

        foreach ($rows as $row) {
            if (isset($row['Name'])) {
                $names[] = $row['Name'];
            }
        }

        return $names;
    }
    function generateUniqueHealthFacilityUsername($clinicName)
    {
        $normalized = strtoupper(preg_replace('/[^A-Z0-9\s\-]/', '', $clinicName));
        $nameParts = preg_split('/[\s\-]+/', $normalized);
        $idPrefix = '';

        if (isset($nameParts[0])) {
            $idPrefix .= substr($nameParts[0], 0, 2); 
        }

        for ($i = 1; $i < count($nameParts); $i++) {
            if (strlen($nameParts[$i]) > 0) {
                $idPrefix .= $nameParts[$i][0]; 
            }
        }
        $idPrefix = str_pad($idPrefix, 4, '0');
        $year = date('Y');
        $month = date('m');
        $suffix = $year . $month; 
        $uniqueId = $idPrefix . '-' . $suffix;

        return $uniqueId;
    }
}
