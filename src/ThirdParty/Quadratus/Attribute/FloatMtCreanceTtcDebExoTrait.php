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
 * Mt creance ttc deb exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCreanceTtcDebExoTrait {

    /**
     * Mt creance ttc deb exo.
     *
     * @var float
     */
    private $mtCreanceTtcDebExo;

    /**
     * Get the mt creance ttc deb exo.
     *
     * @return float Returns the mt creance ttc deb exo.
     */
    public function getMtCreanceTtcDebExo() {
        return $this->mtCreanceTtcDebExo;
    }

    /**
     * Set the mt creance ttc deb exo.
     *
     * @param float $mtCreanceTtcDebExo The mt creance ttc deb exo.
     */
    public function setMtCreanceTtcDebExo($mtCreanceTtcDebExo) {
        $this->mtCreanceTtcDebExo = $mtCreanceTtcDebExo;
        return $this;
    }
}
