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
 * Mt prime3 chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtPrime3ChantierTrait {

    /**
     * Mt prime3 chantier.
     *
     * @var float
     */
    private $mtPrime3Chantier;

    /**
     * Get the mt prime3 chantier.
     *
     * @return float Returns the mt prime3 chantier.
     */
    public function getMtPrime3Chantier() {
        return $this->mtPrime3Chantier;
    }

    /**
     * Set the mt prime3 chantier.
     *
     * @param float $mtPrime3Chantier The mt prime3 chantier.
     */
    public function setMtPrime3Chantier($mtPrime3Chantier) {
        $this->mtPrime3Chantier = $mtPrime3Chantier;
        return $this;
    }
}
