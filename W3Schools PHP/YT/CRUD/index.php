<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- fontawsome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  link rel="stylesheet">   

</head>
<body>

    <div class="container my-5">
        <h2>List of Clients</h2>
        <a class="btn btn-primary" href="create.php" role="button">New Client</a>
        <br>
        <table class="table mt-3">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    include_once 'databaseconnection.php';
                    (function(){
                        
                        $objConnection = new DatabaseConnect();
                        $sql = "Select * from clients";
                        $result = $objConnection->getData($sql);

                        if($result == null) {
                            echo "No records found.";
                            return;
                        }

                        // read data of each row
                        foreach ($result as $row){
                            echo "
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[phone]</td>
                                <td>$row[address]</td>
                                <td>
                                    <a href='edit.php?id=$row[id]' class='btn btn-primary btn-sm'>Edit</a>
                                    <a href='delete.php?id=$row[id]' class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>";
                        }
                    })();
                ?>
                
            </tbody>
        </table>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootsrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
   
</body>
</html>