<?php
class Dog
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($value)
    {
        if (property_exists($this, $value)) {
            return $this->$value;
        }
    }
    public function __set($attribute, $value)
    {
        if (property_exists($this, $attribute)) {
            $this->$attribute = $value;
        }
    }

    public function __toString()
    {
        return "This dog is named $this->name and is $this->age years old.";
    }
}
