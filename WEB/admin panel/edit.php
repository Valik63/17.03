<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Cars</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Car</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM cars WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Car Title:" value="<?php echo $row["title"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="model" placeholder="model:" value="<?php echo $row["model"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select car Type:</option>
                    <option value="Coupe" <?php if($row["type"]=="Coupe"){echo "selected";} ?>>Coupe</option>
                    <option value="Universal" <?php if($row["type"]=="Universal"){echo "selected";} ?>>Universal</option>
                    <option value="Hatchback" <?php if($row["type"]=="Hatchback"){echo "selected";} ?>>Hatchback</option>
                    <option value="Cabriolet" <?php if($row["type"]=="Cabriolet"){echo "selected";} ?>>Cabriolet</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Car Description:"><?php echo $row["description"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit cars" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Cars Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>