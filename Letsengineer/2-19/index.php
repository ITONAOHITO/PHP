<?php
class Enemy {
    public $name;
    public $stamina;
    public $attack;

    public function __construct($name, $stamina = 100,$attack = 10) {
        $this->name = $name;
        $this->stamina = $stamina;
        $this->attack = $attack;
    }

    public function powerUp() {
        $this->attack += 10; 
    }

    public function sayMyname() {
        echo $this->name. "が現れた！";

    }
}
class Boss extends Enemy{
    public function specialAttack(){
        echo "会心の一撃!";
    }
    public function sayMyname(){
        echo "ボスの".$this->name."が現れた！";        
    }
}

$slime = new Enemy("スライム");
$slime->sayMyname();

echo $slime->stamina;
echo '<br>';

$kuribo = new Enemy("クリボー", 600, 999);
echo $kuribo->stamina;
echo $kuribo->powerUp();
echo $kuribo->attack;


$boss = new Boss("野原", 1, 1);
$boss->sayMyname();
$boss->specialAttack();
?>

<br>

<?php
function devide($int1, $int2){
    try {
        if ($int2 == 0){
            throw new Exception('0で割ることはできません。');
        }
        return $int1 / $int2;
    } catch (Exception $e){
        echo "例外処理が発生しました。";
        echo '<br>';
        echo $e->getMessage();
    }
}

echo devide(5, 0);
?>

