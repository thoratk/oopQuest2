<?php
class Truck extends Vehicle
{
    private int $capacity;
    private int $loading=0;
    public function __construct(string $color, int $nbSeats, string $energy,int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->capacity=$capacity;

    }
    public function getCapacity(): int
    {
        return $this->capacity;
    }
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
    public function calculateCapacity():string
    {
        if($this->getCapacity()===$this->getLoading())
            return 'full';
        else
            return ' in filling';

    }

}