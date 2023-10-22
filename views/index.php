<!DOCTYPE html>
<html>
<head>
    <title>ToucanTech Member Management</title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/viewMember.css">
</head>
<body>
    <h1>Add New Member</h1>
    <form action="../controllers/add_member.php" method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        School: <input type="text" name="school"><br>
        <input name="submitNewMember" type="submit" value="Add Member">
    </form>

    <h1>View Members</h1>
    <form action="../controllers/view_members.php" method="post">
        Select School: 
        <select name="school">
            <option value="School A">School A</option>
            <option value="School B">School B</option>
        </select>
        <input name="viewMembers" type="submit" value="View Members">
    </form>
</body>
</html>
