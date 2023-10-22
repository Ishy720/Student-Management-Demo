<?php
class MemberModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    /**
     * Adds a member to a specified school. Returns true on success, false on failure.
     * @param string $name The member's name e.g John Smith
     * @param string $email The member's email e.g johnsmith@email.com
     * @param string $school The school the member will be joining e.g "School A"
     * @return boolean
     */
    public function addMemberToSchool(string $name, string $email, string $school) {

        //Insert member into 'members' table
        $sql = "INSERT INTO members (name, email) VALUES ('$name', '$email')";
        if ($this->conn->query($sql)) {
            $memberID = $this->conn->insert_id;
    
            //Get school ID based on school name
            $schoolQuery = "SELECT id FROM schools WHERE name='$school'";
            $result = $this->conn->query($schoolQuery);
    
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $schoolID = $row["id"];
    
                //Insert into 'member_schools' table
                $insertQuery = "INSERT INTO member_schools (member_id, school_id) VALUES ('$memberID', '$schoolID')";
                return $this->conn->query($insertQuery);

            } else {
                return false; //School name not found
            }
            
        } else {
            return false; //Couldn't add the member
        }
    }
}
?>
