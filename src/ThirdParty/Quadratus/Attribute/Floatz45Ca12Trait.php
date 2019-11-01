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
 * z45 ca12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz45Ca12Trait {

    /**
     * z45 ca12.
     *
     * @var float
     */
    private $z45Ca12;

    /**
     * Get the z45 ca12.
     *
     * @return float Returns the z45 ca12.
     */
    public function getz45Ca12() {
        return $this->z45Ca12;
    }

    /**
     * Set the z45 ca12.
     *
     * @param float $z45Ca12 The z45 ca12.
     */
    public function setz45Ca12($z45Ca12) {
        $this->z45Ca12 = $z45Ca12;
        return $this;
    }
}
