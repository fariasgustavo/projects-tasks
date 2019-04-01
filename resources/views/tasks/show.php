<ul>

    <?php foreach ($tasks as $task) : ?>
       <li>
            <a href="<?= url("/task/$task->id") ?>"></a>
            <p><?= $task->description ?></p>
            <label class="<?= ($task->completed) ? 'active' : 'disable' ?>" for=""></label>
       </li>
    <?php endforeach; ?>

</ul>