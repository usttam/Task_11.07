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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>0</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>1</td>
            <td>0</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td><?php $a=0;echo $a;?></td>
            <td></td>
            <td></td>
            <td></td>
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
          <tr><td>true</td><td>null</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>false</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>1</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>0</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>-1</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>"1"</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>null</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>"php"</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>        
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
          <tr><td>true</td><td>null</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>false</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>1</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>0</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>-1</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>"1"</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>null</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>
          <tr><td>"php"</td><td>false</td><td>1</td><td>0</td><td>-1</td><td>"1"</td><td>null</td> <td>"php"</td></tr>  
        </table>
      </div>
    </div>
  </main> 
</body>
<footer></footer>
</html>