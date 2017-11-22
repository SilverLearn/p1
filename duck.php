

<?php
class DuckEmulator
{
    /**
     * @var int $type
     */
    protected $type;
    private  $DECOY_DUCK = 0;
    private  $MALLARD_DUCK = 1;
    private  $RUBBER_DUCK = 2;
    private  $RED_HEAD_DUCK = 3;
    private  $canfly = false;
    private  $quack;
    private  $string;

    public function __construct($type)
    {
        $this->type = $type;
    }


    public function make($type)
    {
       $this->MasterMethod($this->type);
        return sprintf(
            'this  %s %s %s %s', $this->string, 'with CanFly',$this->canfly,'with this voice :' , $this->quack);


    }



public function MasterMethod($type)
{
   if($this->type=="DECOY_DUCK")
   {
       $this->DECOY_DUCK();

   }
   elseif($this->type=="MALLARD_DUCK") {
       $this->MALLARD_DUCK();
   }

   elseif($this->type=="RUBBER_DUCK") {

       $this->RUBBER_DUCK();
   }else
   {
       $this->RED_HEAD_DUCK();
   }

}

public function DECOY_DUCK()
{
   $this->DECOY_DUCK = "Decoy duck";
    $this->canfly = false;
    $this->quack = "is always silent";
}

public function MALLARD_DUCK()
{

    $this->string = "Mallard duck";
    $this->canfly = true;
    $this->quack  = "Quack! Quack!";

}
public function RUBBER_DUCK()
{
    $this->string = "Rubber duck";
    $this->canfly = false;
    $this->quack  = "Says : Squeak!";

}
public function RED_HEAD_DUCK()
{

    $this->string = "Red head duck";
    $this->canfly = true;
    $this->quack  = "Quack! Quack!";
}
}