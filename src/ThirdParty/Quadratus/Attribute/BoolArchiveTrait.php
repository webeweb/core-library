<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Archive trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArchiveTrait {

    /**
     * Archive.
     *
     * @var bool
     */
    private $archive;

    /**
     * Get the archive.
     *
     * @return bool Returns the archive.
     */
    public function getArchive() {
        return $this->archive;
    }

    /**
     * Set the archive.
     *
     * @param bool $archive The archive.
     */
    public function setArchive($archive) {
        $this->archive = $archive;
        return $this;
    }
}
