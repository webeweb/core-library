<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\OcrLad\Model;

use SplFileInfo;

/**
 * I/O file.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Model
 */
class IOFile extends SplFileInfo {

    /**
     * Get an uniq filename.
     *
     * @return string Returns the uniq filename.
     */
    protected function getUniqFilename() {
        return md5($this->getPathname());
    }

    /**
     * Get an uniq filename "der".
     *
     * @return string Returns the uniq filename "der".
     */
    public function getUniqFilenameDer() {
        return $this->getUniqFilenameWithExtension("der");
    }

    /**
     * Get an uniq filename "pdf".
     *
     * @return string Returns the uniq filename "pdf".
     */
    public function getUniqFilenamePdf() {
        return $this->getUniqFilenameWithExtension("pdf");
    }

    /**
     * Get an uniq filename.
     *
     * @param string $extension The extension.
     * @return string Returns the uniq filename.
     */
    protected function getUniqFilenameWithExtension($extension) {
        return $this->getUniqFilename() . ".{$extension}";
    }

    /**
     * Get an uniq filename "xml".
     *
     * @return string Returns the uniq filename "xml".
     */
    public function getUniqFilenameXml() {
        return $this->getUniqFilenameWithExtension("xml");
    }
}