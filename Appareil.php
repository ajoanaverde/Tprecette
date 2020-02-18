<?php

class Appareil
{
    private $name;
    private $utility;

    /**************** Construct *****************/

    public function __construct($name, $utility)
    {
        $this->setName($name);
        $this->setUtility($utility);
    }

    /******************** GETTERS********************/
    /*
*return $name
*type : string
 */
    public function getName()
    {
        return $this->name;
    }
    /*
* return $utility
*type :string
*/

    public function getUtility()
    {
        return $this->utility;
    }
    /*
 * set value $name
 * type : string
 */
    public function setNAme($name)
    {
        $this->name = $name;
    }
    /*
*set value $utility
* type : string 
 */
    public function setUtility($utility)
    {
        $this->utility = $utility;
    }
}
/*$test = new Appareil('four', 'cuire');
echo $test->getName();
echo $test->getUtility();*/
