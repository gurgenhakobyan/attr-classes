<?php


class Test1
{
    protected $values;

    public function __construct()
    {
        $this->values = [];
    }

    /**
     * @param int $value
     */
    public function addValue(int $value)
    {
        $this->values[] = $value;
    }

    public function increaseAll()
    {
        foreach ($this->values as $key => $value) {
            $this->values[$key] = $value + 1;
        }

    }

}