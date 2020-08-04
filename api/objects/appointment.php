<?php
class appointment{
  
    // database connection and table name
    private $conn;
    private $table_name = "appointment";
  
    // object properties
    public $appointmentId;
    public $appointment_Name;
    public $notes;
    public $details;
    public $child_Name;
    public $date;    
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    // read products
function read(){
  
    // select all query
    $query = "SELECT
                c.name as appointmentId, a.appointment_Name, a.notes, a.details, a.child_Name, a.date
            FROM
                " . $this->table_name . " a
                LEFT JOIN
                    categories c
                        ON a.appointmentId = c.id
            ORDER BY
                a.created DESC";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}
    
}

?>

