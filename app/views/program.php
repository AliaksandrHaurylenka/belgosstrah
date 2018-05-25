<?php
?>

<!--noindex-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Программа "КАСКО-Оптима"</h4>
      </div>
      <div class="modal-body">
        <?

        $optima['description'];
        ?>
        <?php $this->insert('blocks/form-autokasko'); ?>
      </div><!--modal-body-->
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
