<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2><?= $title ?></h2>
<ul>
    <?php foreach ($artikel as $row): ?>
        <li>
            <a href="<?= base_url('/artikel/' . $row['slug']) ?>">
                <?= esc($row['judul']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?= $this->endSection() ?>