<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-sm-8">
                <!-- <h1>registration</h1> -->
                 <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Student Registration</h4>
                        <form action="<?= base_url("/home/save")?>" method="POST">
                            <div class="form-grooup m-2">
                                <!-- <label for="id">Student Id</label> -->
                                <input type="text" name="stid"  value="<?= $edit['stid'];?>" class="form-control" id="id" placeholder="Enter Student Id">
                                <input type="text" name="id"  value="<?= $edit['id'];?>"  class="form-control" id="id" placeholder="Enter Student Id" hidden>
                            </div>
                            <div class="from-group m-2">
                                <!-- <label for="name">Student Name</label> -->
                                <input type="text" name="stname"  value="<?= $edit['stname'];?>" class="form-control" id="name" placeholder="Enter Student Name">
                            </div>
                            <div class="form-group m-2">
                                <!-- <label for="dob">Date of Birth</label> -->
                                <input type="text" name="stclass"  value="<?= $edit['stclass'];?>" class="form-control" id="" placeholder="Enter student Class">
                            </div>
                            <button name="insert" class="btn  btn-success m-2 " type="submit">Save Info</button>

                            <button name="update" class="btn  btn-info m-2 " type="submit">Update Info</button>

                        
                            
                        </form>

                    </div>
                 </div>
            </div>
        </div>

        <div class="container mt-3">
        <h3 class="text-uppercase text-center m-4">Table Students Form</h3>
      </div>
      <div class="container m-5 shadow-lg rounded bg-light p-4">
        <table class="table">
          <thead>
            <tr class="text-uppercase">
              <th>Id</th>
              <th>ST Name</th>
              <th>Gmail</th>
              <th>Address</th>
              <th>Actions</th>
            </tr>
          </thead>
  
          <tbody>
            <?php foreach ($students as $student):?>
            <tr>
              <td><?php echo $student['id']?></td>
              <td><?php echo $student['stid']?></td>
              <td><?php echo $student['stname']?></td>
              <td><?php echo $student['stclass']?></td>
            
          
              <td>
                
              <a href="<?= base_url('/home/edit/'. $student['id']) ?>" class="btn btn-warning">Edit</a>
            
                <a href="<?= base_url('/home/delete/'. $student['id']) ?>" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="text-end">
          <a href="{% url 'logout' %}" class="btn btn-primary w-100">Log Out</a>
        </div> 
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>