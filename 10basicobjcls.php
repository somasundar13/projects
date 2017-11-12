<?php
$u =new user();#1.obj is created 2.stores in instance of cls 3.constru invoked
$u->getname();#func invoking
$u->getadd(2,8);#call by value
$u->getadd(66,2);#many obj can be created for same fn name;
class user{
	function user(){
		echo"as a constructor <br>";
	}
	private $name="dog";#state
	function getname()#behaviour
	{
		$name="sundar";
		echo"the locname :".$name."<br>";
		echo "the name is:".$this->name."<br>";
	}
	function getadd($a,$b)
	{
		/*$a=7;
		$v=3;*/
		echo $a+$b;
		#echo $this->name;
	}
}
/*1.By default,the pgm will create a constr when we create a cls.
2.it only invoke at the tym of obj creation
3.it can be override by pgmer by create new constr.
4,then def consstr will disconnect,start invoking  d new constr.
5.constructor name canbe either cls name or keyword __construct.
*/
?>
