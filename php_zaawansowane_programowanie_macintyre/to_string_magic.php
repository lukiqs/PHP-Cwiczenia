<?php

/**
 * Klass MicroTime
 */
class MicroTime{
    private $times = [];
    
    /**
     * 
     */
    public function __construct() {}

    /**
     * Method start measurement.
     * @param string $name - name of measurement
     */
    public function Start($name){
        $this->times["$name"]['start'] = microtime(true);
    }
    
    /**
     * Method stop measurement.
     * @param string $name - name of measurement
     */
    public function Stop($name){
        $this->times["$name"]['stop'] = microtime(true);
    }
    
    public function __toString() {
        return $this->showResults();
    }

        /**
     * Destructor schow results.
     */
    public function __destruct() {
        echo $this->showResults();

    }
    
    private function showResults(){
        $t = " 
            <center>
            <table>
                <tr>
                    <th>Name of measurement</th>
                    <th>Time (seconds)</th>
                </tr>
        ";
        
        foreach($this->times as $A => $B){
            $tmp = ($this->times[$A]['stop'] - $this->times[$A]['start']);
            
            $t .=  "<tr><td>$A</td><td>$tmp</td></tr>";
        }
        $t .= "</table>";
        return $t;
    }
}
//example

$test = new MicroTime();

$test->Start('work time');
//sth code work
sleep(1);
$test->Stop('work time');

print $test;

$test->Start('sleep time');
//sleeping
sleep(2);
$test->Stop('sleep time');

?>