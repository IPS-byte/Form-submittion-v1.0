<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" href="../css/stlyesheet.css">
</head>
<body>
    <div class="form-container">
        <h2>Student Information</h2>
        <form action="process.php" method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
          </div>
          <div class="form-group">
            <label for="studentId">Student ID:</label>
            <input type="text" id="studentId" name="studentId" required>
          </div>
          <div class="form-group">
            <label for="grades">Grades:</label>
            <input type="text" id="grades" name="grades" required>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit">
          </div>
        </form>
      </div>
      
</body>
</html>