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
     * @var int|null
     */
    protected $size;

    /**
     * Get the size.
     *
     * @return int|null Returns the size.
     */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Set the size.
     *
     * @param int|null $size The size.
     */
    public function setSize(?int $size) {
        $this->size = $size;
        return $this;
    }
}
