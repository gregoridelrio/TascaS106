<?php
class Dog
{
    private string $name;
    private int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($value)
    {
        return $this->$value;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
        echo "Attribute " . $attribute . " changed to " . $value . "<br>";
    }

    public function __toString()
    {
        return "This dog is named " . $this->name . "<br>";
    }
}
