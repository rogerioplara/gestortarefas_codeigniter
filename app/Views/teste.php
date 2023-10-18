<!-- ao utilizar o extend, puxo toda a configuração já feita no main_layout, padronizando assim as seções da página -->

<?= $this->extend('layouts/main_layout') ?>

<!-- Esse section é importado do main_layout e injeta na seção da página -->
<?= $this->section('content') ?>

    <h1>Esta é a primeira view do projeto</h1>

<?= $this->endSection() ?>
