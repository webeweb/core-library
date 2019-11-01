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
 * Mt creance ttc dev dout exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCreanceTtcDevDoutExoTrait {

    /**
     * Mt creance ttc dev dout exo.
     *
     * @var float
     */
    private $mtCreanceTtcDevDoutExo;

    /**
     * Get the mt creance ttc dev dout exo.
     *
     * @return float Returns the mt creance ttc dev dout exo.
     */
    public function getMtCreanceTtcDevDoutExo() {
        return $this->mtCreanceTtcDevDoutExo;
    }

    /**
     * Set the mt creance ttc dev dout exo.
     *
     * @param float $mtCreanceTtcDevDoutExo The mt creance ttc dev dout exo.
     */
    public function setMtCreanceTtcDevDoutExo($mtCreanceTtcDevDoutExo) {
        $this->mtCreanceTtcDevDoutExo = $mtCreanceTtcDevDoutExo;
        return $this;
    }
}
