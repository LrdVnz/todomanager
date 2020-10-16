<?php require('partials/head.php') ?>

   <h3>task manager</h3>

  <ul>
    <?php foreach($tasks as $task) : ?>
    <li>

     <?php if($task->completed) : ?>
     
      <s><?= $task->descr; ?></s>
     
      <?php else :?> 
     
        <?= $task->descr; ?> 
     
        <?php endif; ?>
     
      </li>
    
      <?php endforeach; ?>
  </ul>


  <div id = "create">
    <h4>Create a new task</h4>

    <form method="POST" action="tasks">
    
    <input type="text" name="task"></input>
    <button type="submit">Submit</button>
    </form>
  </div>

 <div id="delete">
   <h4>Delete a task. Put the task name</h4>
   <form method="POST" action="deleteTasks">
    <input type="text" name="delete" ></input>
    <button type="submit">Submit</button>
   </form>
 </div>

 <div id="modify">
   <h4>Modify. Put the task name</h4>
   <form method="POST" action="modifyTasks">
    <input type="text" name="oldDescr"></input>
    <p>Put the updated name</p>
    <input type="text" name="newDescr"></input>
    <button type="submit">Submit</button>
   </form>
 </div>

<?php require('partials/footer.php') ?>