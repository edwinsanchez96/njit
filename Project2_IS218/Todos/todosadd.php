<?php include '../View/header.php'; ?>

    <main>
        <h1>Add A To-Do Item</h1>

        <form action="index.php" method="post">

            <input type="hidden" name="action" value="add_todo">


            <br>
            <label>Message:</label>
            <input type="text" name="message">
            <br>
            <label>Created Date:</label>
            <input type="date" name="created">
            <br>
            <label>Due Date</label>
            <input type="date" name="due">
            <br>

            <input type="submit" value="Submit">
        </form>

        <p><a href="?action=list_todo">Back</a></p>

    </main>

<?php include '../View/footer.php'; ?>