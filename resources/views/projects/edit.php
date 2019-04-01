<pre>
    <?php 
    echo $project->title;
    
    foreach ($tasks as $task) {
        echo $task->description;
    }
    
    ?>


</pre>