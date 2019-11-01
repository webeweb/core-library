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
 * Mt forfait social20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtForfaitSocial20Trait {

    /**
     * Mt forfait social20.
     *
     * @var float
     */
    private $mtForfaitSocial20;

    /**
     * Get the mt forfait social20.
     *
     * @return float Returns the mt forfait social20.
     */
    public function getMtForfaitSocial20() {
        return $this->mtForfaitSocial20;
    }

    /**
     * Set the mt forfait social20.
     *
     * @param float $mtForfaitSocial20 The mt forfait social20.
     */
    public function setMtForfaitSocial20($mtForfaitSocial20) {
        $this->mtForfaitSocial20 = $mtForfaitSocial20;
        return $this;
    }
}
