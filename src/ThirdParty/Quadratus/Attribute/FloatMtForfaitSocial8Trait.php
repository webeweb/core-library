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
 * Mt forfait social8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtForfaitSocial8Trait {

    /**
     * Mt forfait social8.
     *
     * @var float
     */
    private $mtForfaitSocial8;

    /**
     * Get the mt forfait social8.
     *
     * @return float Returns the mt forfait social8.
     */
    public function getMtForfaitSocial8() {
        return $this->mtForfaitSocial8;
    }

    /**
     * Set the mt forfait social8.
     *
     * @param float $mtForfaitSocial8 The mt forfait social8.
     */
    public function setMtForfaitSocial8($mtForfaitSocial8) {
        $this->mtForfaitSocial8 = $mtForfaitSocial8;
        return $this;
    }
}
