<?php require('./../PHP/connection_info.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 1 - List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include('./../PHP/header.php'); ?>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Cars</h6>
            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Car</button> 
                <p></p>
                <div class="table-responsive">
                    <table id="cars" name="cars" class="table table-striped table-bordered" style="width:100%" cellspacing="0" >
                        <thead>
                            <th>ID</th>
                            <th>Owner</th>
                            <th>Car</th>
                            <th>Warranty?</th>
                            <th>Age</th>
                            <th>Start of maintenance</th>
                            <th>End of maintenance</th>
                            <th >Delete</th>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM tasks.szervizkonyv");
                            while($result = mysqli_fetch_array($sql)) : ?>
                            <tr>
                                <td><?= $result['id']?></td>
                                <td><?= $result['tulajdonos'] ?></td>
                                <td><?= $result['auto'] ?></td>
                                <td><?php if ($result['garancialis'] ==0){echo 'No';}else{echo 'Yes';}?></td>
                                <td><?= $result['eletkor']?></td>
                                <td><?= $result['szerviz_kezdete'] ?></td>
                                <td><?= $result['szerviz_vege'] ?></td>
                                <td> <button type="button" class='btn btn-danger updatebtn' >Return</button></td>
                            </tr>
                            <?php
                                endwhile; 
                            ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Car</button> 
                </div>
            </div>          
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./../JS/own.js"></script>
    <?php include('./../PHP/footer.php'); ?>
</body>
</html>