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
 * String pathname trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringPathnameTrait {

    /**
     * Pathname.
     *
     * @var string
     */
    protected $pathname;

    /**
     * Get the pathname.
     *
     * @return string Returns the pathname.
     */
    public function getPathname() {
        return $this->pathname;
    }

    /**
     * Set the pathname.
     *
     * @param string $pathname The pathname.
     */
    public function setPathname($pathname) {
        $this->pathname = $pathname;
        return $this;
    }
}
