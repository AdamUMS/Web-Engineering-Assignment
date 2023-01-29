<html> 
<body>

<div class="container headertop">
    <h2 class="heading">PAST RATING</h2>
</div>

<div class="container"> 
   <table border="1">  
      <tbody>  
         <tr>  
            <th>Student Name</th>  
            <th>Student ID</th> 
            <th>Course Code</th>
            <th>Semester Session</th>
            <th>Section No</th>
            <th>Rating</th> 
            <th>Action</th>
            <th>Action</th>
            

         </tr>  
         <?php  
         foreach ($getStudent->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->student_name;?></td>  
            <td><?php echo $row->student_id;?></td>
            <td><?php echo $row->course_code;?></td>
            <td><?php echo $row->sem_session;?></td>
            <td><?php echo $row->section_no;?></td>
            <td><?php echo $row->rating;?></td>
            <td>
               <a href="<?=base_url()?>Evaluation/editeva">Edit</a></td>
            <td><a href=" <?= base_url('Evaluation/deleteEva?id='.$row->student_eva_id)?> "> Delete </a></td> 
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>
   </div>  
 </body> 
 <style>
   body {front-family: Arial, Helvetica, sans-serif;}
   * {box-sizing: border-box}

   tr {
       width:100%;
   }



    td  {
    border-width: 1px;
    border-style: solid;
    font-size: 9px; 
    border-top-color: #ccc;
}
th  {
   
   background: var(--darkbeige);
   border-width: 1px;
    border-style: solid;
    font-size: 10px;
    border-top-color: #ccc;
}

.container {
      padding: 20px;
      width: 100%;
   }

 </style>
</html>

