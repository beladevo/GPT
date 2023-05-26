<?php

class Appointment {
    private $date;
    private $time;
    private $name;
    
    public function __construct($date, $time, $name) {
        $this->date = $date;
        $this->time = $time;
        $this->name = $name;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function getTime() {
        return $this->time;
    }
    
    public function getName() {
        return $this->name;
    }
}

class AppointmentScheduler {
    private $appointments = [];
    
    public function addAppointment($date, $time, $name) {
        $appointment = new Appointment($date, $time, $name);
        $this->appointments[] = $appointment;
    }
    
    public function getAppointments() {
        return $this->appointments;
    }
}

// Example usage:

$scheduler = new AppointmentScheduler();

$scheduler->addAppointment("2023-05-27", "10:00 AM", "John Doe");
$scheduler->addAppointment("2023-05-27", "11:00 AM", "Jane Smith");
$scheduler->addAppointment("2023-05-28", "09:30 AM", "Alice Johnson");

$appointments = $scheduler->getAppointments();

foreach ($appointments as $appointment) {
    echo nl2br("Appointment: " . $appointment->getName() . "\n");
    echo nl2br("Date: " . $appointment->getDate() . "\n");
    echo nl2br("Time: " . $appointment->getTime() . "\n");
    echo nl2br("---------------------------------\n");
}
?>
