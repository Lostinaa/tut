
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <!--font awesome cdn-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
   integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
   crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h2 class="bg-dark text-light text-center py-2" >  Resmax Employee </h2>
   <div  class="container mb=3">
       

<div class="modal fade" id="usermodal" tabindex="-1" 
role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> add or update employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
         
            <div class="modal-body">
<!--username-->
        <div class="form-group">
<label>useername</label>
             <div class="input-group">

            <div class="input-group-prepend">
                  <span>  <i class=" fas fa-user-alt  "></i> </span>
        </div>
            <input type="text" class="form-control" autocomplete="off" 
            name="username"
         required="required" id="username"     placeholder=" enter username...">
      
    </div>
</div>
  <!--email-->

         <div class="form-group">
         <label> email </label>
             <div class="input-group">

            <div class="input-group-prepend">
                  <span>  <i class="fas fa-envelope-open "></i> </span>
        </div>
            <input type="text" name="email" class="form-control" autocomplete="off"
         required="required" id="email"     placeholder=" enter employee...">
      
    </div>
</div>  
        <!--mobile-->
        
              <div class="form-group">
              <label> mobile </label>
      <div class="input-group">

<div class="input-group-prepend">
     <span>  <i class="fas fa-phone  "></i> </span>
</div>
           <input type="text" name="mobile" class="form-control" autocomplete="off"
required="required" id="mobile"     placeholder=" enter mobile...">

</div>
</div>
<!--photo-->

            <div class="form-group">
<label> photo </label>
     <div class="input-group">

<label for="userphoto" class="custom-file-label" > </label>
       <input type="file" class="custom-file-input" name="photo"  autocomplete="off"
required="required" id="userphoto"     placeholder=" enter employee...">

        
</div>
</div>
</div>
    

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Close</button>
        <button type="button" class="btn btn-dark">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
   <div class="row">
    <div class="coll-10">
        <div class="input-group">
            <div class="input-group-prepend">
            <span>  <i class="fa-solid fa-magnifying-glass"></i> </span>
        </div>
        <input type="text" class="form-control"      placeholder="search employee...">
      
    </div>
</div> 
</div>
  <div class="col-2">
    <button class="btn btn-dark" type="button"
    data-bs-toggle="modal" data-bs-target="#usermodal"> add new user</button>
  </div>
   </div>
</div>

    <!--table-->


    <table class="table table-dark table-striped" id="usertable">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">picture1</th>
      <td>Mark</td>
      <td>Otto@d.com</td>
      <td>911</td>
      <td>
        <span>edit</span>
        <span>profile</span>
        <span>delete</span>
      </td>
    </tr>
   
  </tbody>
</table>
<!--pagination-->




<nav aria-label="Page navigation example" id="pagination">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>



<!--jquery cdn-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<!--popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
     integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html