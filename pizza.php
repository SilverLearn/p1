<?php
interface Pizza{
    public function prepare();
    public function bake();
    public function cut();
    public function box();
}

//نوع پیتزا
class CheesePizza implements Pizza{
    public function prepare(){
        echo 'CheesePizza prepare<br />';
    }

    public function bake(){
        echo 'CheesePizza bake<br />';
    }

    public function cut(){
        echo 'CheesePizza cut<br />';
    }

    public function box(){
        echo 'CheesePizza box<br />';
    }
}

//نوع پیتزا
class PepperoniPizza implements Pizza{
    public function prepare(){
        echo 'PepperoniPizza prepare<br />';
    }

    public function bake(){
        echo 'PepperoniPizza bake<br />';
    }

    public function cut(){
        echo 'PepperoniPizza cut<br />';
    }

    public function box(){
        echo 'PepperoniPizza box<br />';
    }
}

//نوع پیتزا
class CalmPizza implements Pizza{
    public function prepare(){
        echo 'CalmPizza prepare<br />';
    }

    public function bake(){
        echo 'CalmPizza bake<br />';
    }

    public function cut(){
        echo 'CalmPizza cut<br />';
    }

    public function box(){
        echo 'CalmPizza box<br />';
    }
}
//نوع پیتزا

class GreekPizza implements Pizza{
    public function prepare(){
        echo 'GreekPizza prepare<br />';
    }

    public function bake(){
        echo 'GreekPizza bake<br />';
    }

    public function cut(){
        echo 'GreekPizza cut<br />';
    }

    public function box(){
        echo 'GreekPizza box<br />';
    }
}




//تعریف فروشگاه پیتزا
abstract class PizzaStore{

    public function orderPizza($type){
        $Pizza = $this->createPizza($type);

        $Pizza->prepare();
        $Pizza->bake();
        $Pizza->cut();
        $Pizza->box();

        return $Pizza;
    }

    abstract protected function createPizza($type);
}

// برای بحث گسترش کلاس مثالی از ایجاد کلاسی که به فانکشن های کلاس پدر نیز دسترسی داشته باشیم
class Isfahan_PizzaStore extends PizzaStore{
    public function createPizza($type){
        $Pizza = null;

        if ('cheese' == $type) {
            $Pizza = new CheesePizza();
        }elseif ('pepperoni' == $type){
            $Pizza = new PepperoniPizza();
        }elseif ('calm' == $type){
            $Pizza = new CalmPizza();
        }elseif ('greek' == $type){
            $Pizza = new GreekPizza();
        }


        return $Pizza;
    }
}



$ISF_PizzaStore = new Isfahan_PizzaStore();

$ISF_PizzaStore->orderPizza('cheese');

?>