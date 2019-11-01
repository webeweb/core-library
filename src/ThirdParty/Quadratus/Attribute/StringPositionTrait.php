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
 * Position trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPositionTrait {

    /**
     * Position.
     *
     * @var string
     */
    private $position;

    /**
     * Get the position.
     *
     * @return string Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set the position.
     *
     * @param string $position The position.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }
}
