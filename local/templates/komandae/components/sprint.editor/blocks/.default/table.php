<?php /** @var $block array */ ?>
<div class="table-responsive">
    <table class="table table-striped align-middle">
        <thead class="table-primary">
            <?php foreach ($block['rows'] as $index_row => $cols):
                if ($index_row === 0): ?>
            <tr>
                <?php foreach ($cols as $index_col => $col): ?>
                <th scope="col"
                    <?= ($col['style']) ? 'style="' . $col['style'] . '"' : ''; ?>
                    <?= ($col['style']) ? 'style="' . $col['colspan'] . '"' : ''; ?>
                    <?= ($col['style']) ? 'style="' . $col['rowspan'] . '"' : ''; ?>
                ><?= $col['text'] ?>
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
</div>