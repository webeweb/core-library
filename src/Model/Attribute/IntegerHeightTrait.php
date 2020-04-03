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
 * Integer height trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerHeightTrait {

    /**
     * Height.
     *
     * @var int
     */
    protected $height;

    /**
     * Get the height.
     *
     * @return int Returns the height.
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Set the height.
     *
     * @param int $height The height.
     */
    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }
}
