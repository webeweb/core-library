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
 * Az jb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzJbTrait {

    /**
     * Az jb.
     *
     * @var float
     */
    private $azJb;

    /**
     * Get the az jb.
     *
     * @return float Returns the az jb.
     */
    public function getAzJb() {
        return $this->azJb;
    }

    /**
     * Set the az jb.
     *
     * @param float $azJb The az jb.
     */
    public function setAzJb($azJb) {
        $this->azJb = $azJb;
        return $this;
    }
}
