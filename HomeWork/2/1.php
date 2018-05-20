
<!--Вывести таблицу умножения чисел до 10 с помощью двух циклов for (вложенный цикл)-->
<style>
  td {
    border: 1px solid black;
    text-align: center;
    width: 30px;
    height: 30px;
  }
  table {
    border-collapse: collapse;
  }
</style>

<table>
  <?php for($x = 1; $x < 10; $x++): ?>
  <tr>
    <?php for($y = 1; $y < 10; $y++): ?>
      <td><?php echo $x * $y ?></td>
    <?php endfor ?>
  </tr>
  <?php endfor ?>
</table>
