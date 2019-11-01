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
 * Dest tri point trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDestTriPointTrait {

    /**
     * Dest tri point.
     *
     * @var string
     */
    private $destTriPoint;

    /**
     * Get the dest tri point.
     *
     * @return string Returns the dest tri point.
     */
    public function getDestTriPoint() {
        return $this->destTriPoint;
    }

    /**
     * Set the dest tri point.
     *
     * @param string $destTriPoint The dest tri point.
     */
    public function setDestTriPoint($destTriPoint) {
        $this->destTriPoint = $destTriPoint;
        return $this;
    }
}
