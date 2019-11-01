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
 * Montant amortissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAmortissementTrait {

    /**
     * Montant amortissement.
     *
     * @var float
     */
    private $montantAmortissement;

    /**
     * Get the montant amortissement.
     *
     * @return float Returns the montant amortissement.
     */
    public function getMontantAmortissement() {
        return $this->montantAmortissement;
    }

    /**
     * Set the montant amortissement.
     *
     * @param float $montantAmortissement The montant amortissement.
     */
    public function setMontantAmortissement($montantAmortissement) {
        $this->montantAmortissement = $montantAmortissement;
        return $this;
    }
}
