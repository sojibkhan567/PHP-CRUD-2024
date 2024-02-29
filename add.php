<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" />
        </div>
        <div class="form-group">
            <label>Department</label>
            <input type="text" name="department" />
        </div>
        <div class="form-group">
            <label>Semester</label>
            <input type="text" name="semester" />
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" />
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
