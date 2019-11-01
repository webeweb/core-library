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
 * Montant emprunte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantEmprunteTrait {

    /**
     * Montant emprunte.
     *
     * @var float
     */
    private $montantEmprunte;

    /**
     * Get the montant emprunte.
     *
     * @return float Returns the montant emprunte.
     */
    public function getMontantEmprunte() {
        return $this->montantEmprunte;
    }

    /**
     * Set the montant emprunte.
     *
     * @param float $montantEmprunte The montant emprunte.
     */
    public function setMontantEmprunte($montantEmprunte) {
        $this->montantEmprunte = $montantEmprunte;
        return $this;
    }
}
