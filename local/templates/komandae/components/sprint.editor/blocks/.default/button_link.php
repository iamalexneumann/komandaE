<?php
/** @var $block array */
$type = $block['settings']['type'];
$template = $block['settings']['template']; ?>
<?php if (!empty($block['title']) && !empty($block['url'])): ?>
<?php
switch ($template):
    case 'page_team':
?>

<div class="team-section__btns">
    <<?= ($type === 'button') ? 'button type="button"' : 'a'; ?> class="btn btn-outline-primary"
       <?php if (!empty($block['target'])): ?>target="<?= $block['target'] ?>" <?php endif; ?>
       <?php if ($type !== 'button'): ?>href="<?= $block['url'] ?>"<?php endif; ?>><?= $block['title'] ?></<?= ($type === 'button') ? 'button' : 'a'; ?>>
    <button type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#callbackModal">Записаться</button>
</div>

<?php
        break;
    case 'default':
    default:
    ?>
    <<?= ($type === 'button') ? 'button type="button"' : 'a'; ?> class="btn btn-outline-primary"
       <?php if (!empty($block['target'])): ?>target="<?= $block['target'] ?>" <?php endif; ?>
       <?php if ($type !== 'button'): ?>href="<?= $block['url'] ?>"<?php endif; ?>><?= $block['title'] ?></<?= ($type === 'button') ? 'button' : 'a'; ?>>
<?php
        break;
endswitch;
    ?>
<?php endif; ?>
