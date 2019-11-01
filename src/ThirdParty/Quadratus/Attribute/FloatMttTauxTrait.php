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
 * Mtt taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttTauxTrait {

    /**
     * Mtt taux.
     *
     * @var float
     */
    private $mttTaux;

    /**
     * Get the mtt taux.
     *
     * @return float Returns the mtt taux.
     */
    public function getMttTaux() {
        return $this->mttTaux;
    }

    /**
     * Set the mtt taux.
     *
     * @param float $mttTaux The mtt taux.
     */
    public function setMttTaux($mttTaux) {
        $this->mttTaux = $mttTaux;
        return $this;
    }
}
