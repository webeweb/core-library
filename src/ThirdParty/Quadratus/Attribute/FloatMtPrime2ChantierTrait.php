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
 * Mt prime2 chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtPrime2ChantierTrait {

    /**
     * Mt prime2 chantier.
     *
     * @var float
     */
    private $mtPrime2Chantier;

    /**
     * Get the mt prime2 chantier.
     *
     * @return float Returns the mt prime2 chantier.
     */
    public function getMtPrime2Chantier() {
        return $this->mtPrime2Chantier;
    }

    /**
     * Set the mt prime2 chantier.
     *
     * @param float $mtPrime2Chantier The mt prime2 chantier.
     */
    public function setMtPrime2Chantier($mtPrime2Chantier) {
        $this->mtPrime2Chantier = $mtPrime2Chantier;
        return $this;
    }
}
