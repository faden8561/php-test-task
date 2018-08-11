
<?php
class Circle
{
	private $radius;
	
	public function __construct($r)
	{
		$this->radius = $r;
	}
	public function Area()
	{
		return pi() * pow($this->radius, 2);
	}
}
class Rectangle
{
	private $width;
	private $height;
	
	public function __construct($x, $y)
	{
		$this->width = $x;
		$this->height = $y;
	}
	public function Area()
	{
		return $this->width * $this->height;
	}
}
class Triangle
{
	private $a;
	private $b;
	private $c;
	
	public function __construct($a, $b, $c)
	{
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	public function Area()
	{
		$p=($this->b+$this->b+$this->c)/2;		
		$s=sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
		return $s;
	}
}

$path = file_get_contents("figures.json");
$json = json_decode($path, true);

for($i=0;$i<count($json);$i++) {
	switch ($json[$i]['type']) {
	    case "circle":
	        $figure = new Circle($json[$i]['radius']);
	        break;
	    case "rectangle":
		    $figure = new Rectangle($json[$i]['a'], $json[$i]['b']);
	        break;
	    case "triangle":
	        $figure = new Triangle($json[$i]['a'], $json[$i]['b'], $json[$i]['c']);
	        break;
	}
	$json[$i]['s'] = $figure->Area();
}

usort($json, function($a, $b) {
    if($a['s'] === $b['s'])
        return 0;        
    return $a['s'] < $b['s'] ? 1 :-1;
});

for($i=0;$i<count($json);$i++) {
	switch ($json[$i]['type']) {
	    case "circle":
	        echo "circle. radius=".$json[$i]['radius'].". Area:\n".$json[$i]['s']."</br>";
	        break;
	    case "rectangle":
		    echo "rectangle. a=".$json[$i]['a'].", b=".$json[$i]['b'].". Area:\n".$json[$i]['s']."</br>";
	        break;
	    case "triangle":
			echo "triangle. a=".$json[$i]['a'].", b=".$json[$i]['b'].", c=".$json[$i]['c'].". Area:\n".$json[$i]['s']."</br>";
	        break;
	}
}


?>
