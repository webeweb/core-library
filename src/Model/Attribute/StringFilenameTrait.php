<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String filename trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringFilenameTrait {

    /**
     * Filename.
     *
     * @var string
     */
    protected $filename;

    /**
     * Get the filename.
     *
     * @return string Returns the filename.
     */
    public function getFilename() {
        return $this->filename;
    }

    /**
     * Set the filename.
     *
     * @param string $filename The filename.
     */
    public function setFilename($filename) {
        $this->filename = $filename;
        return $this;
    }
}
