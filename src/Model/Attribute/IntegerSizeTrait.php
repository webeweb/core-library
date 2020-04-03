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
 * Integer size trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerSizeTrait {

    /**
     * Size.
     *
     * @var int
     */
    protected $size;

    /**
     * Get the size.
     *
     * @return int Returns the size.
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Set the size.
     *
     * @param int $size The size.
     */
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }
}
