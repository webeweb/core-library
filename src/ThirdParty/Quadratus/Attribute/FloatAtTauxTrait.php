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
 * At taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTauxTrait {

    /**
     * At taux.
     *
     * @var float
     */
    private $atTaux;

    /**
     * Get the at taux.
     *
     * @return float Returns the at taux.
     */
    public function getAtTaux() {
        return $this->atTaux;
    }

    /**
     * Set the at taux.
     *
     * @param float $atTaux The at taux.
     */
    public function setAtTaux($atTaux) {
        $this->atTaux = $atTaux;
        return $this;
    }
}
