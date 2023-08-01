# 型別轉換

1. (int)
    
    ```php
    //string 轉換 int
    
    //0
    $a = "b3";
    (int) $a
    
    //3
    $b = "3b3";
    (int) $b
    ```
    
2. (bool)
3. (float)
4. (string)
5. (array)
    
    ```php
    //$b = ("name" => "Fred", "age" => 35)
    class Persion {
    	var $name = "Fred";
    	var $age = 35;
    }
    
    $a = new Persion;
    $b = (array) $a;
    ```
    
6. (object)
    
    ```php
    //$b = object
    $a = array("name" => "Fred", "age" => 35);
    $b = (object) $a;
    ```