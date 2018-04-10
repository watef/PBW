<!DOCTYPE html>
<html>
<head>
	</head>
	<body>
		<?php
			$filename = "Data Comment.xls";
			header('Content-type: application/ms-excel');
			header('Content-Disposition: attachment; filename=' .$filename);
		?>
		<table width='100%' border=1  style="background-color: white; margin-bottom: 30px" >
 
    <tr>
        <th>Name</th>
         <th>Komentar</th> 
         <th>Email</th> 
        
    </tr>
    <?php foreach ($users as $u) { ?><tr>
      <td><?= $u ['name']?></td>
      <td><?= $u ['email']?></td>
      <td><?= $u ['komentar']?></td>
      <!--td> <a href="<?php echo base_url().'Welcome/delete/'.$u['id']?>">delete </a>
           | <a href="<?php echo base_url().'Welcome/edit/'.$u['id']?>">edit </a>
      </td--></tr>
 <?php }?>
  
    </table>


	</body>
	</html>