<select name="category" class="form-control" id="category" required>
    <option value="">Select A Category</option>
    <?php 
        include("./common/config.php");
        $query="SELECT * FROM category";
        $result=$conn->query($query);
        foreach($result as $row){
            $name= $row['name'];
            $id= $row['id'];
            echo "<option value=$id>$name</option>";
        }
    ?>
</select>