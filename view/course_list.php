<?php include ('view/header.php')?>

<?php 

if ($courses) {?>
<section id="list" class="list">
    <header class="list__row list__header">
        <h1>Course List</h1>
    </header>
    <?php foreach ($courses as $course) : ?>
        <div class="list__row">
            <div class="list__item">
                <p class="bold">
                    <?= $course['courseName'] ?>
                </p>
            </div>
            <div></div>
            <div class="list_removeItem">
                <form action="." method="post" >
                    <input type="hidden" name="action" value="delete_course">
                    <input type="hidden" name="course_id" value = "<?= $course['courseID'] ?>">
                    <button class="remove-button">X</button>
                </form>
            </div>
        </div>
        <?php endforeach ?>
</section>
<?php } else { ?>
<p>No courses Exist Yet.</p>
<?php } ?>




<section id="add" class="add">
    <h2>Add Course</h2>
    <form action="" method="post" id="add__form" class = "add__form">
        <input type="hidden" name="action" value="add_course">
        <div class="add_inputs">
            <label >Name:</label>
            <input type="text" name="course_name" maxlength="50" placeholder="Name" autofocus required>
        </div>
        <div class="add_addItem">
            <button class="add-button bold">Add</button>
        </div>
        <br>
        <p><a href=".">View &amp; Add Assignments</a></p>
    </form>
</section>

<?php include ('view/footer.php')?>