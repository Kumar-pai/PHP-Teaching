# String

1. ‘ ‘：不支援變數插入
    
    ```php
    //This years {$years}
    $years = 2022;
    echo 'This years {$years}';
    ```
    
2. “ “：支援變數插入
    
    ```php
    //This years 2022
    $years = 2022;
    echo "This years {$years}";
    echo "This years $years";
    ```
    
3. ` `：執行 shell
    
    ```php
    //var/www/html
    echo `pwd`;
    ```
    

單引號脱逸字串

| 脱逸字串 | 字元表示 |
| --- | --- |
| \” | “ |
| \n | 換行 |
| \r | Enter |
| \t | Tab |
| \\ | 反斜線 |
| \$ | $ |
| \{ | { |
| \} | } |
| \[ | [ |
| \] | ] |
| \0~\777 |  |
| \u | UTF-8 編碼 |

雙引號脱逸字串

| 脱逸字串 | 字元表示 |
|------| --- |
| \’   | ‘ |
| \\\  | \ |