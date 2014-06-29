<?php
function modal($title, $content) {
    $string = '<div id="newModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h2 class="text-center">' . $title . '</h2>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    ' . $content . '
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">OK</button>
            </div>
        </div>
    </div>
</div>';
    return $string;
    }
?>
