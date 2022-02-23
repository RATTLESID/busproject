<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<div class="container">

         
  <table class="table table-striped">
    
    <tbody>
      <tr>
        <td>Student ID</td>
        <td><?php echo $r->student_id; ?></td>
        
      </tr>
      <tr>
        <td>Student Name</td>
        <td><?php echo $r->student_name;?></td>
        
      </tr>
      <tr>
        <td>Student Mobile no</td>
        <td><?php echo $r->mobile_no;?></td>
        
      </tr>
      <tr>
        <td>Pickup point (Amount)</td>
        <td><?php echo $r->pic; ?> (<?php echo $r->amount; ?>)</td>
        
      </tr>
      <tr>
        <td>Date From</td>
        <td><?php echo date("d-m-Y",strtotime($r->s_from)); ?></td>
        
      </tr>
      <tr>
        <td>Date To</td>
        <td><?php echo date("d-m-Y",strtotime($r->s_to)); ?></td>
        
      </tr>
      
    </tbody>
  </table>
</div>


<script>
    window.print();
    setTimeout(function(){
window.close();
    }, 3000);
</script>