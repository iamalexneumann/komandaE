<?php
/** @var $block array */
$template = $block['settings']['template']; ?>
<div class="table-responsive">
<?php
switch ($template):
    case 'schedule':
?>
    <table class="table table-striped align-middle">
        <thead class="table-primary">
            <?php foreach ($block['rows'] as $index_row => $cols):
                if ($index_row === 0): ?>
            <tr>
                <?php foreach ($cols as $index_col => $col): ?>
                <th scope="col"
                    <?= ($col['style']) ? 'style="' . $col['style'] . '"' : ''; ?>
                    <?= ($col['style']) ? 'colspan="' . $col['colspan'] . '"' : ''; ?>
                    <?= ($col['style']) ? 'rowspan="' . $col['rowspan'] . '"' : ''; ?>>
                    <?= $col['text'] ?>
                </th>
                <?php endforeach; ?>
            </tr>
            <?php
                endif;
            endforeach; ?>
        </thead>
        <tbody>
            <?php foreach ($block['rows'] as $index_row => $cols):
                if ($index_row !== 0): ?>
            <tr>
                <?php foreach ($cols as $index_col => $col):
                    $col = Sprint\Editor\Blocks\Table::prepareColumn($col); ?>
                    <<?= ($index_col === 0) ? 'th scope="row"' : 'td'; ?> <?php if ($col['style']){ ?>style="<?= $col['style'] ?>"<?php } ?>
                        <?php if ($col['colspan']){ ?>colspan="<?= $col['colspan'] ?>"<?php } ?>
                        <?php if ($col['rowspan']){ ?>rowspan="<?= $col['rowspan'] ?>"<?php } ?>
                    ><?= $col['text'] ?></<?= ($index_col === 0) ? 'th' : 'td'; ?>>
                <?php endforeach; ?>
            </tr>
            <?php
                endif;
            endforeach; ?>
        </tbody>
    </table>
<?php
        break;
    case 'tariff':
?>
    <table class="table table-striped align-middle table_tariff">
        <thead class="table-primary">
        <?php foreach ($block['rows'] as $index_row => $cols):
            if ($index_row === 0): ?>
                <tr>
                    <?php foreach ($cols as $index_col => $col): ?>
                    <th scope="col"
                        <?= ($col['style']) ? 'style="' . $col['style'] . '"' : ''; ?>
                        <?= ($col['style']) ? 'colspan="' . $col['colspan'] . '"' : ''; ?>
                        <?= ($col['style']) ? 'rowspan="' . $col['rowspan'] . '"' : ''; ?>>
                        <?= $col['text'] ?>
                    </th>
                    <?php endforeach; ?>
                    <th></th>
                </tr>
            <?php
            endif;
        endforeach; ?>
        </thead>
        <tbody>
        <?php foreach ($block['rows'] as $index_row => $cols):
            if ($index_row !== 0): ?>
                <tr>
                <?php foreach ($cols as $col):
                    $col = Sprint\Editor\Blocks\Table::prepareColumn($col); ?>
                    <td <?php if ($col['style']){ ?>style="<?= $col['style'] ?>"<?php } ?>
                    <?php if ($col['colspan']){ ?>colspan="<?= $col['colspan'] ?>"<?php } ?>
                    <?php if ($col['rowspan']){ ?>rowspan="<?= $col['rowspan'] ?>"<?php } ?>
                    ><?= $col['text'] ?></td>
                <?php endforeach; ?>
                    <td class="text-center">
                        <button type="button"
                                class="btn btn-outline-primary btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#callbackModal"
                                data-bs-modal-title="Записаться на занятие">Записаться</button>
                    </td>
                </tr>
            <?php
            endif;
        endforeach; ?>
        </tbody>
    </table>
<?php
        break;
    case 'default':
    default:
?>
    <table class="table table-bordered">
        <?php foreach ($block['rows'] as $cols): ?>
        <tr>
            <?php
            foreach ($cols as $col):
                $col = Sprint\Editor\Blocks\Table::prepareColumn($col); ?>
                <td <?= ($col['style']) ? 'style="' . $col['style'] . '"' : ''; ?>
                    <?= ($col['style']) ? 'colspan="' . $col['colspan'] . '"' : ''; ?>
                    <?= ($col['style']) ? 'rowspan="' . $col['rowspan'] . '"' : ''; ?>><?= $col['text']; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>
<?php
        break;
endswitch;
?>
</div>