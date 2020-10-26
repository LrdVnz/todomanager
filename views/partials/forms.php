
 <div id="complete">
     <form method="POST" action="completeTasks">
         <button type="submit" name="complete" value="<?= $task['descr']; ?>">Complete</button>
     </form>
 </div>

 <div id="delete">
     <form method="POST" action="deleteTasks">
         <button type="submit" name="delete" value="<?= $task['descr']; ?>">Delete</button>
     </form>
 </div>

 <div id="modify">
     <form method="POST" action="modifyTasks">
         <input id="modify-input" type="text" name="newDescr" placeholder="put the new name"></input>
         <button type="submit" name="oldDescr" value="<?= $task['descr'] ?>">Modify</button>
     </form>
 </div>
 </section>