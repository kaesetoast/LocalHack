<?php
class LocalHack {

	const VHOST_PATH = "/etc/apache2/sites-enabled/";

	private $blacklist = array(
			".",
        	"..",
        	".idea",
        	"assets",
        	"index.php",
	);

	public function getDirectoryList() {
		$unorderedList = "<ul>";
		$files = scandir(".");
		$count = count($files);
		for ($i=0; $i < $count; $i++) { 
			if (is_dir($files[$i]) && !in_array($files[$i], $this->blacklist)) {
				$unorderedList .= '<li><a href="' . $this->getLink($files[$i]) . '">' . $files[$i] . '</a></li>';
			}
		}
		return $unorderedList."</ul>";
	}

	public function getFileList() {
		$unorderedList = "<ul>";
		$files = scandir(".");
		$count = count($files);
		for ($i=0; $i < $count; $i++) { 
			if (is_file($files[$i]) && !in_array($files[$i], $this->blacklist)) {
				$unorderedList .= '<li><a href="' . $this->getLink($files[$i]) . '">' . $files[$i] . '</a></li>';
			}
		}
		return $unorderedList."</ul>";
	}

	private function getLink($file) {
        if ($this->isProject($file)) {
            return "http://".$file;
        } else {
            return "/".$file;
        }
    }

    private function isProject($file) {
    	return file_exists(self::VHOST_PATH.$file);
    }

}