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
 * Integer width trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerWidthTrait {

    /**
     * Width.
     *
     * @var int|null
     */
    protected $width;

    /**
     * Get the width.
     *
     * @return int|null Returns the width.
     */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Set the width.
     *
     * @param int|null $width The width.
     */
    public function setWidth(?int $width) {
        $this->width = $width;
        return $this;
    }
}
