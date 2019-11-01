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
 * z4 cca12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz4Cca12Trait {

    /**
     * z4 cca12.
     *
     * @var float
     */
    private $z4Cca12;

    /**
     * Get the z4 cca12.
     *
     * @return float Returns the z4 cca12.
     */
    public function getz4Cca12() {
        return $this->z4Cca12;
    }

    /**
     * Set the z4 cca12.
     *
     * @param float $z4Cca12 The z4 cca12.
     */
    public function setz4Cca12($z4Cca12) {
        $this->z4Cca12 = $z4Cca12;
        return $this;
    }
}
