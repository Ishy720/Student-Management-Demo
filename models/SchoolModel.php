<?php
class SchoolModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    /**
     * Retrieves members from a specified school
     * @param string $school The school to query members from e.g "School A"
     * @return mysqli_result
     */
    public function displaySchoolMembers(string $school) {

        //construct an SQL query to get all members from the school's name

        $sql = "SELECT m.* FROM members m
                JOIN member_schools ms ON m.id = ms.member_id
                JOIN schools s ON s.id = ms.school_id
                WHERE s.name = '$school'";
        
        //return the query results
        return $this->conn->query($sql);
    }
}
?>
