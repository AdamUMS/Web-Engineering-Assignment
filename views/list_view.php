<!--- http://localhost/lecturerprofile/lecturer - link for list_view -->

<!--- list_view is to view the lecturer profile table that container lecturer information -->

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <?php if($this->session->flashdata('status')) : ?>
            <div class="alert alert-success">
              <?= $this->session->flashdata('status'); ?>
            </div>
          <?php endif; ?>
            <h3><b> Lecturer Profile 
             <a href="<?php echo base_url('lecturer/create');?>" class="btn btn-primary">Create/Add Lecturer</a>
           </b></h3>
          </div>
          <div class="card-body">
            <table id="datatable1" class="table table-bordered">
              <thead>
                <tr>
                  <th><b>Lecturer Name</b></th>
                  <th><b>Lecturer ID Number</b></th>
                  <th><b>Telephone Number</b></th>
                  <th><b>University Email</b></th>
                  <th><b>Position</b></th>
                  <th><b>Education Level</b></th>
                  <th><b>Area of Expertise</b></th>
                  <th><b>Delete</b></th>
                  <th><b>Edit</b></th>
                </tr>
              </thead>

                <tbody>
                  <?php foreach ($lecturer as $row) : ?>
                  
                  <tr>
                    <td><?php echo $row->lecId; ?></td>
                    <td><?= $row->lecName ?></td>
                    <td><?= $row->lecTel ?></td>
                    <td><?= $row->lecEmail ?></td>
                    <td><?= $row->lecPost ?></td>
                    <td><?= $row->lecEdu ?></td>
                    <td><?= $row->lecArea ?></td>
                   
                  
                    <td>
                      <a href="<?php echo base_url('lecturer/edit/'.$row->lecId) ?>" class="btn btn-success btn-sm">Edit</a>
                    </td>
                    <td>
                      <a href="<?php echo base_url('lecturer/delete/'.$row->lecId) ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

          </div>
        </div>
      </div>
    </div>
  </div>


  <style>

    .container
     {
    padding-top: 50px;
    padding-bottom: 60px;
    margin-top:50px;
    width: 90%;
    margin-left: 40px;
     }

     .row
     {
      background-color: #acdf87; 
     }

     .card-header
     {
      background-color: #acdf87;
     }

     h3 
     {
       font-family: Arial, Verdana, sans-serif;
       font-size : 2.3rem;
     }


     th {

      font-size : 1.5rem;
      text-align: center;
     }

     td {
      font-size : 2.0rem;
     }

     .btn-primary
     {
       background-color: #043927;
     }


     .table-bordered {
       width :80%;

     }



    /*Table*/
table, th, td{
  border:1px solid #183a1d;
  border-collapse: collapse;
   background-color: #acdf87;
}


  table{
  margin-top: 50px;
  margin-bottom: 20px;
  background-color:#fefff0;
  padding-right: 20px;
  width:60%;
  margin-left : 20px;
}

th, td{
  padding: 5px;
  text-align:center;
}


 .btn-success {
    border-radius: 4px ;
    border: none;
    padding: 15px 15px;
    margin-bottom: 10px;
    margin-left: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    background-color: #4CAF50 ;
    color: white ;


  }

   .btn-danger {
     border-radius: 4px ;
     border: none;
     padding: 15px 15px;
     margin-bottom: 10px;
     margin-left: 10px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     background-color: #f44336;
     color : white;
 }
    

   .btn-primary {

    float: right ;
   }
  </style>
  

    

    