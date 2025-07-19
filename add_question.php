<?php include('header.php'); ?>

<!-- Start div -->
<div id="div" class="container mt-3 mb-5">
    <h1 class="title1">Add Question</h1>
    <div class="card">
        <form action="add_question_code.php" method="POST">
            <div class="row p-3">
                <div class="mb-3 col-lg-6">
                    <label for="category"><h5>Category</h5></label>
                    <select class="form-control" name="category_id">
                        <?php 
                        include('conn.php');
                        $query="SELECT * FROM categories";
                        $result= mysqli_query($conn,$query);
                        while($row=mysqli_fetch_assoc($result))
                        {
                            ?>
                            <option value="<?= $row['category_id']; ?>"> <?= $row['title']; ?></option>
                            <?php }?>
                        </select>
                    </div>
                    
                    <div class="mb-3 col-lg-12">
                        <label for="title"><h5>Title</h5></label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>

                    <?php
                    // Define an array to hold options
                    $options = ['option_a', 'option_b', 'option_c', 'option_d'];

                    // Shuffle the options
                    shuffle($options);

                    // Iterate through shuffled options
                    foreach ($options as $option) {
                        ?>
                        <div class="mb-3 col-lg-6">
                            <label for="<?= $option ?>"><h5><?= ucwords(str_replace('_', ' ', $option)) ?></h5></label>
                            <input type="text" id="<?= $option ?>" name="<?= $option ?>" class="form-control" required>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="mb-3 col-lg-6">
                        <label for="correct_option"><h5>Correct Option</h5></label>
                        <input type="text" id="correct_option" name="correct_option" class="form-control" required>
                    </div>
                    
                    <div class="mb-3 col-lg-12">
                        <button type="submit" class="btn btn-primary mt-2 ml-2">Submit</button>
                        <button type="reset" class="btn btn-danger mt-2 ml-2">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include('footer.php'); ?>
