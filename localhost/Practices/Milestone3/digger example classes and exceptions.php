<?php 

class Digger {
	public function dig($hole_spec=false){
		if ($this->survey($hole_spec)) {
			$this->private_dig($hole_spec);
			return true;
		}
		return false;
	}

	protected function private_dig($hole_spec){
		throw new Exception("Digger must be subclassed <br>");
	}

	protected function survey($hole_spec){
		echo "surveying the hole <br>";
		if ($hole_spec) {
			return true;
		}
		return false;
	}
}
class Shovel extends Digger{
	protected function private_dig($hs) {
		echo "digging with a shovel <br> done but it took 16 hours! <br>";
	}
}
class Jackhammer extends Digger {
	public function private_dig($hs) {
		echo "digging with a jackhammer <br> done in only 3 hours! <br>";

	}
}
class Spoon extends Digger{
	public function private_dig($hs){
		echo "digging with a Spoon<br> done in 4 months 3 days and 11 hours<br>";
		
	}
}
//$job_spec = $_GET['size'];
class DiggerFactory {
	function getDigger($spec){
		if ($job_spec <5){
			$d = new Shovel();
		} else {
			$d = new Jackhammer();
		}
	return $d;
	}
}

// $d= new Digger();
// if($d->dig()) {
// 	echo "the hole is done";
// }
// else {
// 	echo "we need a spec";
// }

$df = new DiggerFactory();
$shovel=new Shovel();
$jackhammer=new Jackhammer();

if($shovel->dig("a spec")){
	echo "the hole is done<br>";
}
else {
	echo "we need a spec <br>";
}



if($jackhammer->dig("a spec")){
	echo "the hole is done<br>";
}
else {
	echo "we need a spec<br>";
}