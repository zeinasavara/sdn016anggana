<!-- Sweet Alert -->
<?php if ($this->session->has_userdata('success')) : ?>
    <div class="flashdata" data-flashdata="<?= $this->session->flashdata('success') ?>" data-flash="Success"></div>
<?php endif ?>
<?php if ($this->session->has_userdata('fail')) : ?>
    <div class="flashdata" data-flashdata="<?= $this->session->flashdata('fail') ?>" data-flash="Failed"></div>
<?php endif ?>