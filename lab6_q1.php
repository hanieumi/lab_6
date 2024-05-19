<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php  
    $name = "Hanie Umi Sofea Binti Mohamad Nizam";
    $matricNumber = "DI220129";
    $course = "BIT21503 Web Development";
    $yearOfStudy = "2";
    $address = "No 48, Jalan Semenyih Mewah 8, Taman Semenyih Mewah 2, <Br> 43500, Semenyih, Selangor Darul Ehsan.";

    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>  
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>  
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>  
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>  
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>  
        </tr>
    </table>
</body>
</html>
