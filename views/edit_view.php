
<!--http://localhost/lecturerprofile/lecturer/edit/LI01 - link to edit_view -->

<!-- edit_view is a form to edit the created lecturer record when click on the edit button -->


 <!-- Bootstrap CSS -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->


 <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5> Edit Lecturer Profile </h5>
             <p> Please fill in this form to edit the lecturer record.</p>
             <a href="<?php echo base_url('lecturer');?>" class="btn btn-primary">Back</a>
           
          </div>
          <div class="card-body">
            <form action="<?php echo base_url('lecturer/update/'.$lecturer->lecId) ?>" method="POST">

               <div class="form-group">
                <label><b>Lecturer Name</b></label>
                <input type="text" placeholder="Enter lecturer name" name="lecName" value="<?= $lecturer->lecName ?>" class="form-control">
                <small><?php echo form_error('lecName'); ?></small>
              </div>

              <div class="form-group">
                <label><b>Office Number</b></label>
                <input type="text" placeholder="Enter office number" name="lecTel" value="<?= $lecturer->lecTel ?>" class="form-control">
                <small><?php echo form_error('lecTel'); ?></small>
              </div>

              <div class="form-group">
                <label><b>University Email</b></label>
                <input type="text" placeholder="Enter University email" name="lecEmail" value="<?= $lecturer->lecEmail ?>" class="form-control">
                <small><?php echo form_error('lecEmail'); ?></small>
              </div>

              <div class="form-group">
                <label><b>Lecturer Position</b></label>
                <input type="text" placeholder="Enter lecturer Position in the faculty" name="lecPost" value="<?= $lecturer->lecPost ?>" class="form-control">
                <small><?php echo form_error('lecPost'); ?></small>
              </div>

              <div class="form-group">
                <label><b>Education Level</b></label>
                <input type="text" placeholder ="Enter education level" name="lecEdu" value="<?= $lecturer->lecEdu ?>" class="form-control">
                 <small><?php echo form_error('lecEdu'); ?></small>
              </div>

              <div class="form-group">
                <label><b>Area of Expertise</b></label>
                <input type="text" placeholder="Enter area of Expertise" name="lecArea" value="<?= $lecturer->lecArea ?>" class="form-control">
                <small><?php echo form_error('lecArea'); ?></small>
              </div>

              

              <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="<?php echo base_url('lecturer');?>" class="btn btn-danger">Cancel</a>
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>





<!-- CSS STYLE ----->

<style>

   .btn-primary {

     float : right;
   }

  .btn-success .btn-danger {
    
      padding: 14px 20px;
      margin: 8px 0;

  }

  .container {

    margin-bottom: 30px;
  }

  .card 
  {
    background-color: #acdf87;
  }

  .form-group 
  {
    background-color: #acdf87;
    margin-bottom: 20px;
    font-size : 2.0rem;
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
     float : right;
     background-color: blue;
     cursor: pointer;
     color: white;
     border: none;
     color: white;
     padding: 10px 24px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     border-radius: 5px ;
     margin-bottom: 20px;
     margin-right: 20px;
  }


   input[type=text] {
  width: 100%;
  padding: 12px 12px;
  margin: 8px 0;
  box-sizing: border-box;
  font-size: 1.5rem;
}

  

  .container {
    padding-top: 40px ;
  }

  h5 {
    font-size: 2.5rem;
  }

  p {
    font-size : 2.0rem;
  }




 

  /*change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width:  300px)
  {
    .btn-danger .btn-success {
      width: 20%;
    }

</style>/

