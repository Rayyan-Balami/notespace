<?php
class Alert {
    private $alertType = "success";
    private $alertTitle = "please enter a title";
    private $alertText = "please enter some text";

    public function __construct($alertType, $alertTitle, $alertText) {
        $this->alertType = $alertType;
        $this->alertTitle = $alertTitle;
        $this->alertText = $alertText;
    }

    public function showAlert($alertType, $alertTitle, $alertText) {
        echo "
        <div class='alert alert-$alertType alert-dismissible fade show' role='alert'>
            <strong>$alertTitle</strong> $alertText
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

        </div>
        ";
    }
    
}
