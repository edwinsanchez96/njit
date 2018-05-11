<?php include '../View/header.php'; ?>
    <main>
        <h1>Edit A To-Do Item</h1>
        <form action="index.php" method="post">
            <?php
            $id = filter_input(INPUT_GET, 'id');
            $todo = todos::getTodoById($id);
            $createDate1 = $todo->getcreatedate();
            $dueDate1 = $todo->getduedate();
            $pattern = '/ [0-9]{2}:[0-9]{2}:[0-9]{2}/';
            $createDate = preg_replace($pattern, "", $createDate1);
            $dueDate = preg_replace($pattern, "", $dueDate1);
            ?>
            <input type="hidden" name="action" value="edit_todo">
            <input type="hidden" name="itemid" value="<?php echo $id; ?>">
            <br>
            <label>Message:</label>
            <input type="text" name="message" value="<?php echo $todo->getDescription(); ?>">
            <br>
            <label>Created Date:</label>
            <input type="date" name="create date" value="<?php echo $createDate ?>">
            <br>
            <label>Due Date:</label>
            <input type="date" name="due date" value="<?php echo $dueDate ?>">
            <br>
            <input type="submit" value="Submit">
        </form>
        <p><a href="?action=list_todo">Back</a></p>
    </main>
<?php include '../View/footer.php'; ?>