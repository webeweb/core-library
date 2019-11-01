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
 * Mt creance ttc regl exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCreanceTtcReglExoTrait {

    /**
     * Mt creance ttc regl exo.
     *
     * @var float
     */
    private $mtCreanceTtcReglExo;

    /**
     * Get the mt creance ttc regl exo.
     *
     * @return float Returns the mt creance ttc regl exo.
     */
    public function getMtCreanceTtcReglExo() {
        return $this->mtCreanceTtcReglExo;
    }

    /**
     * Set the mt creance ttc regl exo.
     *
     * @param float $mtCreanceTtcReglExo The mt creance ttc regl exo.
     */
    public function setMtCreanceTtcReglExo($mtCreanceTtcReglExo) {
        $this->mtCreanceTtcReglExo = $mtCreanceTtcReglExo;
        return $this;
    }
}
