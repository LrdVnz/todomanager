<?php require('partials/head.php') ?>

<div id="container">
  <div id="list">
    <h3>Task Manager</h3>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>

          <?php if ($task->completed) : ?>

            <p class="task completed"><?= $task->descr; ?></p>

          <?php else : ?>

            <p class="task notCompleted"><?= $task->descr; ?></p>

          <?php endif; ?>

          <section id="index-actions">
            <div id="complete">
              <form method="POST" action="completeTasks">
                <button type="submit" name="complete" value="<?= $task->descr; ?>">Completed</button>
              </form>
            </div>

            <div id="delete">
              <form method="POST" action="deleteTasks">
                <button type="submit" name="delete" value="<?= $task->descr; ?>">Delete</button>
              </form>
            </div>

            <div id="modify">
              <form method="POST" action="modifyTasks">
                <input id="modify-input" type="text" name="newDescr" placeholder="put the new name"></input>
                <button type="submit" name="oldDescr" value="<?= $task->descr ?>">Modify</button>
              </form>
            </div>
          </section>


        </li>

      <?php endforeach; ?>
    </ul>
  </div>

  <div id="create">
    <h4>Create a new task</h4>
    <form method="POST" action="tasks">
      <input type="text" name="task"></input>
      <button type="submit">Create</button>
    </form>
  </div>
</div>
<?php require('partials/footer.php') ?>