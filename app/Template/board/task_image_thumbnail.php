<?php
/**
 * Thumbnail Helper
 *
 * @package helper
 * @author  Senol Kandemir
 */
if (! empty($task['owner_id'])): ?>
<div class="task-board-thumbnails">
    <span>
		Hello?
        <?= $this->thumbnail->render($task['id'], $task['project_id']) ?>		
    </span>
</div>
<?php endif ?>
