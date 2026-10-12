<?php

class CV
{
    public $name = null;
    public $email = null;
    public $phone = null;
    public $address = null;
    public $dob = null;
    public $education = null;
    public $experience = null;
    public $skills = null;
    public $hobbies = null;
    public $objective = null;

    public function setData($name, $email, $phone, $address, $dob, $education,
        $experience, $skills, $hobbies, $objective ){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->dob = $dob;
        $this->education = $education;
        $this->experience = $experience;
        $this->skills = $skills;
        $this->hobbies = $hobbies;
        $this->objective = $objective;
    }

    public function displayCV()
    {
        echo "<h2>CV</h2>";
        echo "<hr>";

        echo "<b>Name:</b> $this->name <br>";
        echo "<b>Email:</b> $this->email <br>";
        echo "<b>Phone:</b> $this->phone <br>";
        echo "<b>Address:</b> $this->address <br>";
        echo "<b>Date of Birth:</b> $this->dob <br>";
        echo "<b>Objective:</b> $this->objective <br>";
        echo "<b>Education:</b> $this->education <br>";
        echo "<b>Experience:</b> $this->experience <br>";
        echo "<b>Skills:</b> $this->skills <br>";
        echo "<b>Hobbies:</b> $this->hobbies <br>";

        echo "<hr>";
    }
}

$person1 = new CV();

$person1->setData(
    "Safdar Ali",
    "safdar@gmail.com",
    "03053415221",
    "Matli, Badin",
    "10-Jan-2003",
    "BS Computer Science",
    "Web Development Internee",
    "PHP, MySQL, HTML, CSS, JavaScript",
    "Coding, Reading, Cricket",
    "To become a professional Full Stack Developer."
);

$person2 = new CV();

$person2->setData(
    "Ahmed Khan",
    "ahmed@gmail.com",
    "03111234567",
    "Hyderabad",
    "15-Mar-2002",
    "BS Software Engineering",
    "2 Years Networking Experience",
    "Java, Python, Networking, Linux",
    "Gaming, Football, Traveling",
    "To work in a IT company and grow professionally."
);

$person1->displayCV();
$person2->displayCV();

?>