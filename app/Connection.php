<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;
use App\Person;

class Connection extends Model
{
    public function person()
    {
        return $this->belongsTo(Person::class);   
    }
        
    public function setPerson(Person $person)
    {
        $this->person()->associate($person);
    }
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    public function setAnimal(Animal $animal)
    {
        $this->animal()->associate($animal);
    }
    public function getId()
    {
        return $this->id;
    }
    public function getType(): bool
    {
        return $this->type;
    }
    public function setType(bool $type)
    {
        $this->type = $type;
    }
    public function getStart_date(): DateTime
    {
        return $this->start_date;
    }
    public function setStart_date(DateTime $startDate)
    {
        $this->start_date = $startDate;
    }
    public function getEnd_date(): DateTime
    {
        return $this->end_date;
    }
    public function setEnd_date(): DateTime
    {
        $this->end_date;
    }
}