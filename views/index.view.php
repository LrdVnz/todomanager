<?php require('partials/index-header.php') ?>

<div id="container">
  <div id="list">
    <h3>Task Manager</h3>

    <section id="titles">
       
    <h4>Description</h4>
    <h4>Due date</h4>

    </section>
    
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>

          <?php if ($task['completed']) : ?>
            <div>
              <p class="task completed"><?= $task['descr'] ?></p>
            </div>
            <div>
              <p class="task completed duedate"><?= $task['duedate'] ?></p>
            </div>
          <?php else : ?>
            <div>
              <p class="task notCompleted"><?= $task['descr'] ?></p>
            </div>

            <div>
              <p class="task notCompleted duedate"><?= $task['duedate'] ?></p>
            </div>

          <?php endif; ?>

        <?php require('partials/forms.php'); ?>

        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div id="create">
    <h4>Create a new task</h4>
    <form method="POST" action="tasks">
      <input type="text" name="task"></input>
      <input type="date" name="date" placeholder="put a due date"></input>
      <button type="submit">Create</button>
    </form>
  </div>
</div>

<?php require('partials/footer.php') ?>