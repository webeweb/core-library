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
 * Solde jours n1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSoldeJoursN1Trait {

    /**
     * Solde jours n1.
     *
     * @var float
     */
    private $soldeJoursN1;

    /**
     * Get the solde jours n1.
     *
     * @return float Returns the solde jours n1.
     */
    public function getSoldeJoursN1() {
        return $this->soldeJoursN1;
    }

    /**
     * Set the solde jours n1.
     *
     * @param float $soldeJoursN1 The solde jours n1.
     */
    public function setSoldeJoursN1($soldeJoursN1) {
        $this->soldeJoursN1 = $soldeJoursN1;
        return $this;
    }
}
