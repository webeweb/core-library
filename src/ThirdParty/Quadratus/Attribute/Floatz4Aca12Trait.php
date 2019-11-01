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
 * z4 aca12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz4Aca12Trait {

    /**
     * z4 aca12.
     *
     * @var float
     */
    private $z4Aca12;

    /**
     * Get the z4 aca12.
     *
     * @return float Returns the z4 aca12.
     */
    public function getz4Aca12() {
        return $this->z4Aca12;
    }

    /**
     * Set the z4 aca12.
     *
     * @param float $z4Aca12 The z4 aca12.
     */
    public function setz4Aca12($z4Aca12) {
        $this->z4Aca12 = $z4Aca12;
        return $this;
    }
}
