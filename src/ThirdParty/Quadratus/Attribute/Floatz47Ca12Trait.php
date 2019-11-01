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
 * z47 ca12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz47Ca12Trait {

    /**
     * z47 ca12.
     *
     * @var float
     */
    private $z47Ca12;

    /**
     * Get the z47 ca12.
     *
     * @return float Returns the z47 ca12.
     */
    public function getz47Ca12() {
        return $this->z47Ca12;
    }

    /**
     * Set the z47 ca12.
     *
     * @param float $z47Ca12 The z47 ca12.
     */
    public function setz47Ca12($z47Ca12) {
        $this->z47Ca12 = $z47Ca12;
        return $this;
    }
}
