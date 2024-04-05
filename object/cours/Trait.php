<?php
trait MonTrait{
    public function methode(){
        echo "une fonction partagée";
    }
}

class ClassA {
    use MonTrait;
}

class ClassB {
    use MonTrait;
}