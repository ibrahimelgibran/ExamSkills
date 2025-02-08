<style type="text/css">
    /* Disable text selection */
    body {
        user-select: none;
    }

    /* Disable text selection for Safari, Firefox, and Internet Explorer/Edge */
    body {
        -webkit-user-select: none; /* Safari */
        -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
    }

    table.table tr td {
        background-color: transparent;
        padding: 4px;
    }

    table tr td {
        padding: 4px;
    }

    table tr {
        margin-bottom: 10px;
    }

    /* Additional styles to make the table look consistent */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table td {
        border: 1px solid #ddd;
    }
</style>

<table class="" border="0" cellpadding="0" cellspacing="0">
    <?php foreach ($value->options as $rOption => $vOption): ?>
        <tr>
            <td style="width:2%">
                <input onclick="answered('<?= $rows ?>')" type="radio" name="option<?= $value->id_question ?>" value="<?= $vOption->id_option ?>">
            </td>
            <td style="width:3%">
                <div style="color:black;margin-top:-4px;">
                    <b><?php $char = include('numberToChar.php'); echo $char ?>.</b>
                </div>
                <input type="hidden" name="key_option<?= $value->id_question.$vOption->id_option ?>" value="<?= $char ?>">
            </td>
            <td style="width:90%">
                <div class="row">
                    <?php if ($vOption->option_image != ''): ?>
                        <div class="col-sm-8">
                    <?php else: ?>
                        <div class="col-sm-12">
                    <?php endif ?>
                        <span style="color:black !important;"><?= $vOption->option_ ?></span>
                    </div>
                    <?php if ($vOption->option_image != ''): ?>
                        <div class="col-sm-4">
                            <center>
                                <a data-fancybox="gallery" href="<?= base_url('assets/images/assignments/'.$dataAssignment->assignment_path.'/'.$vOption->option_image) ?>"><img src="<?= base_url('assets/images/assignments/'.$dataAssignment->assignment_path.'/'.$vOption->option_image) ?>" class="img-thumbnail"></a>
                            </center>
                        </div>
                    <?php endif ?>
                </div><!-- / Row -->
            </td>
        </tr>
    <?php endforeach ?>
</table>
