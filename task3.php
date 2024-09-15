<?php
class Employee {
    // Private properties (encapsulation)
    private $name;
    private $salary;

    // Constructor to initialize employee data
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary); // Securely set salary using setter
    }

    // Public method to get employee name
    public function getName() {
        return $this->name;
    }

    // Public method to securely set the salary
    public function setSalary($salary) {
        // Salary validation: only accept positive numbers
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            echo "Error: Salary must be a positive number.\n";
        }
    }

    // Public method to securely get the salary
    public function getSalary() {
        return $this->salary;
    }
}

// Example usage
$employee = new Employee("Ariful Islam", 50000); // Create employee with valid salary
echo "Employee: " . $employee->getName() . "\n";
echo "Salary: $" . $employee->getSalary() . "\n";


// Set a valid salary
$employee->setSalary(55000);
echo "Updated Salary: $" . $employee->getSalary() . "\n";
?>
