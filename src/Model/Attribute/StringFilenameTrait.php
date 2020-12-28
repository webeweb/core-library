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
     * @var string|null
     */
    protected $filename;

    /**
     * Get the filename.
     *
     * @return string|null Returns the filename.
     */
    public function getFilename(): ?string {
        return $this->filename;
    }

    /**
     * Set the filename.
     *
     * @param string|null $filename The filename.
     */
    public function setFilename(?string $filename) {
        $this->filename = $filename;
        return $this;
    }
}
