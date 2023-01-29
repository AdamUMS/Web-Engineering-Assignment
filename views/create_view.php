
<!--http://localhost/lecturerprofile/lecturer/create // crete_view link -->

<!-- create_view is a form to add/create a new lecturer profile record -->


 <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->


 <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5> Create/Add Lecturer </h5>
              <p> Please fill in this form to create a new lecturer profile.</p>
             <a href="<?php echo base_url('lecturer');?>" class="btn btn-primary">Back</a>
           
          </div>
          <hr>
          <div class="card-body">
            <form action="<?php echo base_url('lecturer/store'); ?>" method="POST">

              <div class="form-group">
                <label><b>Lecturer ID Number</b></label>
                <input type="text" placeholder="Enter lecturer id number" name="lecId" class="form-control">
                <small><?php echo form_error('lecId'); ?></small>
              </div>

               <div class="form-group">
                <label><b>Lecturer Name</b></label>
                <input type="text" placeholder="Enter lecturer name" name="lecName"class="form-control">
                <small><?php echo form_error('lecName'); ?></small>
              </div>

              <div class="form-group">
                <label><b>Office Number</b></label>
                <input type="text" placeholder="Enter office number" name="lecTel" class="form-control">
                <small><?php echo form_error('lecTel'); ?></small>
              </div>

              <div class="form-group">
                <label><b>University Email</b></label>
                <input type="text" placeholder="Enter University email" name="lecEmail" class="form-control">
                <small><?php echo form_error('lecEmail'); ?></small>
              </div>

              <div class="form-group">
                <label><b>Lecturer Position</b></label>
                <input type="text" placeholder="Enter lecturer Position in the faculty" name="lecPost" class="form-control">
                <small><?php echo form_error('lecPost'); ?></small>
              </div>

              <div class="form-group">
                <label><b>Education Level</b></label>
                <input type="text" placeholder ="Enter education level" name="lecEdu" class="form-control">
                 <small><?php echo form_error('lecEdu'); ?></small>
              </div>

              <div class="form-group">
                <label><b>Area of Expertise</b></label>
                <input type="text" placeholder="Enter area of Expertise" name="lecArea" class="form-control">
                <small><?php echo form_error('lecArea'); ?></small>
              </div>

              
              <div class="form-group">
                <button type="submit" class="btn btn-success">Create</button>
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

  .btn-success .btn-danger {
    
     padding-top:30px;
     padding bottom: 20px;
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


  .form-group {
    margin-bottom: 20px;
  }

  .card {
    background-color: acdf87;
  }

  .form-group {
    font-size : 1.5rem;
  }

  

   .form-control {
    width : 80%;
    padding : 10px;
    margin : 10px;
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
     border-radius: 4px ;
     margin-bottom: 20px;
  }

  .btn:hover {
    font-size: 1.0rem;
    }



 
  input[type=text] {
  width: 100%;
  padding: 12px 12px;
  margin: 8px 0;
  box-sizing: border-box;
  font-size : 1.5rem;
}

 .card-header {
  padding : 10px;
 }

 h5 {
  font-size: 1.5rem;
 }

 p {
  font-size: 1.5rem;
 }




 

  /*change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width:  300px)
  {
    .btn-danger, .btn-success {
      width: 20%;
    }

</style>/

