<?php
Class A {
    private string $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

Class B extends A {
    public function doSomething() {
        print($this->getName() . " fais quelque chose\n");
    }
}

Class C extends B {
    public function getName() {
        return parent::getName() . " Extended";
    }
    public function doSomething2() {
        print($this->getName() . " fais quelque chose de super génial\n");
    }
}

Class D extends C {
    public function doSomething2() {
        print($this->getName() . " fais quelque chose de nul\n");
    }
}

Class Z {
    private A $monA;

    public function setMonA($monA) {
        $this->monA = $monA;
    }

    public function getMonA (): A {
        return $this->monA;
    }
}

$monObjet = new C();
$monObjet->setName("Toto");
$monObjet2 = new D();
$monObjet2->setName("Titi");

$monZ = new Z();
$monZ->setMonA($monObjet);
print($monZ->getMonA()->getName());
$monZ->setMonA($monObjet2);
print($monZ->getMonA()->getName());
