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
 * Mt indemn lic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtIndemnLicTrait {

    /**
     * Mt indemn lic.
     *
     * @var float
     */
    private $mtIndemnLic;

    /**
     * Get the mt indemn lic.
     *
     * @return float Returns the mt indemn lic.
     */
    public function getMtIndemnLic() {
        return $this->mtIndemnLic;
    }

    /**
     * Set the mt indemn lic.
     *
     * @param float $mtIndemnLic The mt indemn lic.
     */
    public function setMtIndemnLic($mtIndemnLic) {
        $this->mtIndemnLic = $mtIndemnLic;
        return $this;
    }
}
