<?php

namespace Kanboard\Helper;

use Kanboard\Core\Base;

/**
 * Thumbnail Helper
 *
 * @package helper
 * @author  Senol Kandemir
 */
class ThumbnailHelper extends Base
{
    /**
     * Render user avatar
     *
     * @access public
     * @param  string  $task_id
	 * @param  string  $project_id
     * @return string
     */
    public function render($task_id, $project_id)
    {
		$images = $this->taskFileModel->getAllImages($task_id);
		
		if(count($images) > 0)
		{
			$image = $images[0];
			
			$image_id = $image['id'];
			
			$filename = $this->taskFileModel->getThumbnailPath($image['path']);

			$imageData = base64_encode(file_get_contents('data/files/'.$filename));

			$src = 'data: image/jpeg;charset=utf-8;base64,'.$imageData;
			// $src = 'data:image/gif;charset=utf-8;base64,'.$imageData;

			$html = '<img src="'.$src.'", style="width:100%;height:100%">';
			
			return $html;
		}

        return '';
    }
}
