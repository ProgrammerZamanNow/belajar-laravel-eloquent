<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonTest extends TestCase
{
    public function testPerson()
    {
        $person = new Person();
        $person->first_name = "Eko";
        $person->last_name = "Khannedy";
        $person->save();

        self::assertEquals("EKO Khannedy", $person->full_name);

        $person->full_name = "Joko Morro";
        $person->save();

        self::assertEquals("JOKO", $person->first_name);
        self::assertEquals("Morro", $person->last_name);
    }


}
