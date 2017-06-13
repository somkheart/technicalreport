<div class="">
<table class="table ">
    <thead>
      <tr>
        <th>เลขที่รายงาน</th>
        <th>ชื่อรายงาน</th>
         <th>ผู้จัดทำ</th>
        <th>วันที่ออกเอกสาร</th>
      </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<10;$i++){ ?>
      <tr>
        <td>5700340<?=$i?></td>
        <td>การเพิ่มประสิทธิภาพในการ</td>
        <td>นายสมเกียรติ ไกรสินธุ์</td>
        <td><?php echo date("Y-m-d"); ?></td>
      </tr>
    <?php } ?>
      
    </tbody>
  </table>
    
    
</div>