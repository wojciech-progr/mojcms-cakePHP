<?= $this->Flash->render() ?>
<?= $this->element('head'); ?>
<?= $this->element('navigation', ['mainSettings' => $mainSettings]); ?>
<?= $this->fetch('content') ?>
<?= $this->element('footer', ['mainSettings' => $mainSettings]); ?>