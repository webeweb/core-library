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
 * String directory trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringDirectoryTrait {

    /**
     * Directory.
     *
     * @var string
     */
    protected $directory;

    /**
     * Get the directory.
     *
     * @return string Returns the directory.
     */
    public function getDirectory() {
        return $this->directory;
    }

    /**
     * Set the directory.
     *
     * @param string $directory The directory.
     */
    public function setDirectory($directory) {
        $this->directory = $directory;
        return $this;
    }
}
