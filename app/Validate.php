<?php
namespace TaskManager;

class Validate{
    private $data;
    private $errors =[];
    private static $fields = ['subject', 'priority'];

    public function __construct($post_data){
        $this->data = $post_data;
    }

    public function  validateForm(){
        foreach (self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateSubject();
        $this->validatePriority();
        return $this->errors;
    }
    private function validateSubject(){
        $val = $this->data['subject'];

        if(empty($val)){
            $this->addError('subject', 'subject can not be empty');
        } else{
            if(!preg_match('/[a-zA-Z0-9]{3,50}$/', $val)){
                $this->addError('subject', 'Subject must be 3-255 characters long.');
            }

        }
    }
    private function validatePriority(){
        $val = $this->data['priority'];
        if(empty($val)){
            $this->addError('priority', 'Fill the priority field');
        }

    }
    private function addError($key, $val){
        $this->errors[$key] = $val;
    }

}

