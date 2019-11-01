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
 * Mt creance ttc irrec exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCreanceTtcIrrecExoTrait {

    /**
     * Mt creance ttc irrec exo.
     *
     * @var float
     */
    private $mtCreanceTtcIrrecExo;

    /**
     * Get the mt creance ttc irrec exo.
     *
     * @return float Returns the mt creance ttc irrec exo.
     */
    public function getMtCreanceTtcIrrecExo() {
        return $this->mtCreanceTtcIrrecExo;
    }

    /**
     * Set the mt creance ttc irrec exo.
     *
     * @param float $mtCreanceTtcIrrecExo The mt creance ttc irrec exo.
     */
    public function setMtCreanceTtcIrrecExo($mtCreanceTtcIrrecExo) {
        $this->mtCreanceTtcIrrecExo = $mtCreanceTtcIrrecExo;
        return $this;
    }
}
