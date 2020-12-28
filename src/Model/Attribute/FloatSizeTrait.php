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
 * Float size trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatSizeTrait {

    /**
     * Size.
     *
     * @var float|null
     */
    protected $size;

    /**
     * Get the size.
     *
     * @return float|null Returns the size.
     */
    public function getSize(): ?float {
        return $this->size;
    }

    /**
     * Set the size.
     *
     * @param float|null $size The size.
     */
    public function setSize(?float $size) {
        $this->size = $size;
        return $this;
    }
}
