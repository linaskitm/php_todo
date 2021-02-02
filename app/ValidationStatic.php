<?php
namespace TaskManager;
class ValidationStatic
{
    private static $errors = [];

    public static function validate()
    {
        self::validateSubject();
        self::validatePriority();
        self::validateDate();
        return self::$errors;
    }

    private static function validateSubject()
    {
        if (empty($_POST['subject']) || !preg_match('/[a-zA-Z0-9]{3,50}$/', $_POST['subject'])) {
            self::$errors[] = "The subject field must be 3-255 characters long.";
        }
    }

    private static function validatePriority()
    {
        if (empty($_POST['priority'])) {
            self::$errors[] = "Fill the priority field";
        }
    }

    private static function validateDate()
    {
        if (empty($_POST['duedate'])) {
            self::$errors[] = "Fill the date field";
        }
    }

}
