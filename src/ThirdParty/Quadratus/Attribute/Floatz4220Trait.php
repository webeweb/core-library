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
 * z4220 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz4220Trait {

    /**
     * z4220.
     *
     * @var float
     */
    private $z4220;

    /**
     * Get the z4220.
     *
     * @return float Returns the z4220.
     */
    public function getz4220() {
        return $this->z4220;
    }

    /**
     * Set the z4220.
     *
     * @param float $z4220 The z4220.
     */
    public function setz4220($z4220) {
        $this->z4220 = $z4220;
        return $this;
    }
}
