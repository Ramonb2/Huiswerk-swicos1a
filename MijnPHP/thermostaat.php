<?php  
 class Thermostaat {     
 private $mintemp = 10;  
 private $maxtemp = 30; 
 private $temp = 20; 
 private $stapgrote = 1;
      
    public function __construct($temp, $maxtemp, $mintemp , $stapgrote) {  
        $this->stapgrote = $stapgrote;  
    } 
	public function setKouder()  {  
	if( $this->temp > $this->mintemp){
        $this->temp -= $this->stapgrote; 
	}
	else echo 'kan niet kouden dan $mintemp';
	}
	
       
	public function setWarmer() {  
        if($this->temp < $this->maxtemp){
			$this->temp += $this->stapgrote;  
		}
		else echo 'kan niet warmer dan $maxtemp';
    }        
    public function setstapgrote($x) {  
	$this->stapgrote = $x;
          }  
	public function Get(){
		if($this->temp >= 10){
		return $this->temp;
		}
		else echo '10';
		}
}

$een = new Thermostaat(20, 30, 10,1);
$een->setKouder();
$een->setKouder();
$een->setKouder();
$een->setstapgrote(5);
$een->setKouder();
$een->setKouder();

echo $een->get();
 ?>