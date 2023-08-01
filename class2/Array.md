# 陣列
1. list($variable, ......)
陣列轉變數
    
    ```php
    $array = ["Kumar", "28", "cat"];
    list($name, $age, $pet) =  $array;
    ```
    
2. array_pad(array, length, value) 填充陣列
複製原有陣列，至新陣列
    
    ```php
    $a = array(5, 10)
    
    //$b = [5, 10, 0, 0, 0, 0, 0];
    $b = array_pad($a, 5, 0)
    
    //$c = [0, 0, 0, 0, 0, 5, 10]
    $c = array_pad($a, -5, 0)
    ```
    
3. array_slice(array, offset, length) 陣列切片
4. array_chunk(array, size [, preserve_keys]) 陣列分割
5. array_keys() 鍵和
6. array_key_exists(key, array) 檢查元素是否存在
    
    ```php
    $params['age'] = 0;
    
    //false
    $params['age'] ? true : false;
    
    //true
    array_key_exists('age', $params) ? true : false;
    
    // True/False/True
    $params2 = array(0, null, '');
    foreach($params2 as $item) {
    	$a = isset($item) ? "true" : "false";
    	print($a);
    }
    ```
    
7. array_splice(array, start, [, length, [, replacement] ] )
插入與刪除元素
    
    ```php
    $fruit = ["apple", "banana", "tomato", "watermelon", "pawpaw"];
    $animal = ["cat", "dog", "pig", "monkey"];
    
    //["apple", "banana", "pawpaw"];
    array_splice($fruit, 2, 2)
    
    //["apple", "banana"];
    array_splice($fruit, 2)
    
    //$fruit = ["apple", "cat", "dog", "pig", "monkey", "watermelon", "pawpaw"]
    array_splice($fruit, 1, 2 $animal)
    
    ```
    
8. 陣列變數轉換(8.0廢棄)
    
    ```php
    //$name = "Kumar";
    //$age = 28;
    //$pet = "cat";
    $test = ["name" => "kumar", "age" => 28, "pet" => "cat"];
    extract($test);
    
    //["name" => "kumar", "age" => 28, "pet" => "cat"]
    $test2 = compact("name", "age", "pet")
    ```
    
9. in_array(array)
回傳 boolean
    
    ```php
    $a = ["1", "2", "3", "4", "5"];
    
    //true
    in_array("2", $a);
    ```
10. array_search(array)
回傳 key
    
    ```php
    $a = ["name" => "kumar", "age" => 28, "pet" => "cat"];
    
    //pet
    array_search("cat", $a)
    ```
11. 陣列排序
    
| 效果 | 升冪 | 降冪 | 使用者定義的順序 |
| --- | --- | --- | --- |
| 依值對陣列排序，重新指定索引 | sort() | rsort() | usort() |
| 依值對陣列排序 | asort() | arsort() | uasort() |
| 依鍵對陣列排序 | ksort() | krsort() | uksort() |