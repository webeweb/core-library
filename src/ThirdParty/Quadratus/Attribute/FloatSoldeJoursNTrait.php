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
 * Solde jours n trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSoldeJoursNTrait {

    /**
     * Solde jours n.
     *
     * @var float
     */
    private $soldeJoursN;

    /**
     * Get the solde jours n.
     *
     * @return float Returns the solde jours n.
     */
    public function getSoldeJoursN() {
        return $this->soldeJoursN;
    }

    /**
     * Set the solde jours n.
     *
     * @param float $soldeJoursN The solde jours n.
     */
    public function setSoldeJoursN($soldeJoursN) {
        $this->soldeJoursN = $soldeJoursN;
        return $this;
    }
}
