<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css" />
  <title>&#9822;PHP type comparison tables</title> 
</head>
<nav></nav>
<body>
  <h1>Truth & comparison tables in PHP</h1>
  <main>
    <div class="container-main">
      <h2>Task 1. PHP Truth table</h2>
      <div class="table-container1">
        <table>
          <caption>Таблица истинности PHP</caption>
          <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
          </tr>
          <tr>
            <td>0</td>
            <td>0</td>
            <td><?php $a=0; echo ((!$a==1)?  '1' : '0');?></td>
            <td><?php $a=0; $b=0; echo (($a==1||$b==1)?  '1' : '0');?></td>
            <td><?php $a=0; $b=0; echo (($a==1&&$b==1) ?  '1' : '0');?></td>
            <td><?php $a=0; $b=0; echo (($a==1xor$b==1) ?  '1' : '0');?></td>
          </tr>
          <tr>
            <td>0</td>
            <td>1</td>
            <td><?php $a=0; echo ((!$a==1)?  '1' : '0');?></td>
            <td><?php $a=0; $b=1; echo (($a==1||$b==1) ?  '1' : '0');?></td>
            <td><?php $a=0; $b=1; echo (($a==1&&$b==1) ?  '1' : '0');?></td>
            <td><?php $a=0; $b=1; echo (($a==1xor$b==1) ?  '1' : '0');?></td>
          </tr>
          <tr>
            <td>1</td>
            <td>0</td>
            <td><?php $a=1; echo ((!$a==1)?  '1' : '0');?></td>
            <td><?php $a=1; $b=0; echo (($a==1||$b==1) ?  '1' : '0');?></td>
            <td><?php $a=1; $b=0; echo (($a==1&&$b==1) ?  '1' : '0');?></td>
            <td><?php $a=1; $b=0; echo (($a==1xor$b==1) ?  '1' : '0');?></td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td><?php $a=1; echo ((!$a==1)?  '1' : '0');?></td>
            <td><?php $a=1; $b=1; echo (($a==1||$b==1) ?  '1' : '0');?></td>
            <td><?php $a=1; $b=1; echo (($a==1&&$b==1) ?  '1' : '0');?></td>
            <td><?php $a=1; $b=1; echo (($a==1xor$b==1) ?  '1' : '0');?></td>
          </tr>               
        </table>
      </div>
      <h2>Task 2. PHP comparison table 1</h2>
      <div class="table-container2">
        <table >
          <caption>Таблица сравнения "=="</caption>
          <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
          </tr>
          <tr>
            <td>true</td>
            <td><?php $a=true; $b=true; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=false; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=0; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=-1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b='1'; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=null; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b='php'; echo (($a==$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>false</td>
            <td><?php $a=false; $b=true; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=false; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=0; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=-1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b='1'; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=null; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b='php'; echo (($a==$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>1</td>
            <td><?php $a=1; $b=true; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=false; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=0; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=-1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b='1'; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=null; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b='php'; echo (($a==$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>0</td>
            <td><?php $a=0; $b=true; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=false; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=0; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=-1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b='1'; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=null; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b='php'; echo (($a==$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>-1</td>
            <td><?php $a=-1; $b=true; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=false; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=0; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=-1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b='1'; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=null; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b='php'; echo (($a==$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>"1"</td>
            <td><?php $a='1'; $b=true; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=false; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=0; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=-1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b='1'; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=null; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b='php'; echo (($a==$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>null</td>
            <td><?php $a=null; $b=true; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=false; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=0; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=-1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b='1'; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=null; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b='php'; echo (($a==$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>"php"</td>
            <td><?php $a='php'; $b=true; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=false; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=0; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=-1; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b='1'; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=null; echo (($a==$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b='php'; echo (($a==$b)?  'true' : 'false');?></td>
          </tr>        
        </table>
      </div>
      <h2>Task 3. PHP comparison table 2</h2>
      <div class="table-container3">
        <table>
          <caption>Таблица сравнения "==="</caption>
          <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
          </tr>
          <tr>
            <td>true</td>
            <td><?php $a=true; $b=true; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=false; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=0; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=-1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b='1'; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b=null; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=true; $b='php'; echo (($a===$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>false</td>
            <td><?php $a=false; $b=true; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=false; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=0; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=-1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b='1'; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b=null; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=false; $b='php'; echo (($a===$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>1</td>
            <td><?php $a=1; $b=true; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=false; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=0; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=-1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b='1'; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b=null; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=1; $b='php'; echo (($a===$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>0</td>
            <td><?php $a=0; $b=true; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=false; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=0; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=-1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b='1'; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b=null; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=0; $b='php'; echo (($a===$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>-1</td>
            <td><?php $a=-1; $b=true; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=false; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=0; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=-1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b='1'; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b=null; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=-1; $b='php'; echo (($a===$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>"1"</td>
            <td><?php $a='1'; $b=true; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=false; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=0; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=-1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b='1'; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b=null; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='1'; $b='php'; echo (($a===$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>null</td>
            <td><?php $a=null; $b=true; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=false; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=0; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=-1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b='1'; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b=null; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a=null; $b='php'; echo (($a===$b)?  'true' : 'false');?></td>
          </tr>
          <tr>
            <td>"php"</td>
            <td><?php $a='php'; $b=true; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=false; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=0; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=-1; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b='1'; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b=null; echo (($a===$b)?  'true' : 'false');?></td>
            <td><?php $a='php'; $b='php'; echo (($a===$b)?  'true' : 'false');?></td>
          </tr>   
        </table>
      </div>
    </div>
  </main> 
</body>
<footer></footer>
</html>