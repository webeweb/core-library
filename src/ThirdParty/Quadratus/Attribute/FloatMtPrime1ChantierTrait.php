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
 * Mt prime1 chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtPrime1ChantierTrait {

    /**
     * Mt prime1 chantier.
     *
     * @var float
     */
    private $mtPrime1Chantier;

    /**
     * Get the mt prime1 chantier.
     *
     * @return float Returns the mt prime1 chantier.
     */
    public function getMtPrime1Chantier() {
        return $this->mtPrime1Chantier;
    }

    /**
     * Set the mt prime1 chantier.
     *
     * @param float $mtPrime1Chantier The mt prime1 chantier.
     */
    public function setMtPrime1Chantier($mtPrime1Chantier) {
        $this->mtPrime1Chantier = $mtPrime1Chantier;
        return $this;
    }
}
