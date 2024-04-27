<?= $this->extend('templates/main_' . $templates);  ?>

<?= $this->section('content');  ?>
<div>
    <h1>This is Content</h1>
</div>
<?= $this->endSection();  ?>