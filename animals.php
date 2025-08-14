<pre>
<?php

abstract class animal {
    protected $name;
    protected $power;
    protected $colour;
    protected $favFood;
    
    const ESPECE = '';

        // fonction pour cet objet
    public function __construct($name = '', $power = 'cuteness', $colour = 'fur', $favFood = 'salmon')
    {
        $this->name = $name;
        $this->power = $power;
        $this->colour = $colour;
        $this->favFood = $favFood;

    }


}

class dog extends animal {

   
    const ESPECE = 'dog';

    public function __construct() {
        parent::__construct();
    }

    public function present() {
        return 'Hello, my name is ' .$this->name . '. My power is to ' .$this->power . ', Im a ' .$this->colour .self::ESPECE .'. My favourite food is ' . $this->favFood;
    }
}


class Cat extends animal {

    const ESPECE = 'cat';

    public function __construct() {
        parent::__construct();
    }

    public function present() {
        
        return 'Hello, my name is ' .$this->name . '. My power is to ' .$this->power . ', Im a ' .$this->colour .self::ESPECE .'. My favourite food is ' . $this->favFood;
    }

}

$tigger = new Cat('Tigger', 'racket', 'tabby', 'pate');
echo $tigger->present() . PHP_EOL;

$corgy = new dog('lemon', 'bark', 'lemon', 'MY food');
echo $corgy->present() . PHP_EOL;
?>
</pre>