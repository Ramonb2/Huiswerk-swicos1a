 <?php class bankrekening {     
 private $rekeningnummer ;
 private $naamRekeninghouder;

  public function __construct($rekeningnummer, $naamRekeninghouder,$minkrediet,$pluskrediet,$saldo) {  
		$this->minkrediet = $minkrediet;
		$this->pluskrediet = $pluskrediet;
		$this->saldo = $saldo;
    } 
	public function setLimiet()  {  
	if( $this->saldo > $this->minkrediet){
        $this->temp -= $this->stapgrote; 
	}
	else echo 'kan niet kouden dan';
	}
	
       
	public function getSaldo() {  
        if($this->temp < $this->maxtemp){
			$this->temp += $this->stapgrote;  
		}
		else echo 'kan niet warmer dan $maxtemp';
    }        
    public function setstapgrote($x) {  
	$this->stapgrote = $x;
          }  
	public function Get(){
		return $this->temp;
		
		}
}
?>

