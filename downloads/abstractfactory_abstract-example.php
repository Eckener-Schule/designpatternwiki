<?php
interface AbstractFactory
{
    public function createProduct1 ();
    public function createProduct2 ();
    public function createProduct3 ();
}

class ConcreteFactoryA implements AbstractFactory
{
    public function createProduct1 ()
    {
	    return new ConcreteProduct1A;
    }
	    
    public function createProduct2 ()
    {
	    return new ConcreteProduct2A;
    }
	    
    public function createProduct3 ()
    {
	    return new ConcreteProduct3A;
    }
}
	    
class ConcreteFactoryB implements AbstractFactory
{
    public function createProduct1 ()
    {
	    return new ConcreteProduct1B;
    }
	    
    public function createProduct2 ()
    {
	    return new ConcreteProduct2B;
    }
	    
    public function createProduct3 ()
    {
	    return new ConcreteProduct3B;
    }
}
?>
