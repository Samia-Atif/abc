<!-- ENCAPSULATION -->
<!-- INHERITANCE(1 association 2 agregation 3 composition) -->

<?php
class base{
    //rule 1 veriable should be in private

    private $name;
    private $number;

    //rule 2 setter function

    //function should always in public 
    public function setname($n=null){
        $this->name = $n;
    }

    public function setnumber($a=null){
        $this->number = $a;
    }

    //getter function with return

    public function getname(){
        return $this->name;
    }

    public function getnumber(){
        return $this->number;
    }



}
$obj=new base;
$obj->setname("xyz");
$obj->setnumber(1234567);

echo $obj->getname()."<br>";
echo $obj->getnumber();



?>