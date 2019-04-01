<ul>
    <?php foreach ($projects as $project) : ?>
        <li>
            <a href="<?= url("project/$project->id") ?>">
                <h3><?= $project->title ?></h3>
                <p><?= $project->description ?></p>
            </a>
        </li>
    <?php endforeach; ?>
</ul>