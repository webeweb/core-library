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
 * Montant saisi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSaisiTrait {

    /**
     * Montant saisi.
     *
     * @var float
     */
    private $montantSaisi;

    /**
     * Get the montant saisi.
     *
     * @return float Returns the montant saisi.
     */
    public function getMontantSaisi() {
        return $this->montantSaisi;
    }

    /**
     * Set the montant saisi.
     *
     * @param float $montantSaisi The montant saisi.
     */
    public function setMontantSaisi($montantSaisi) {
        $this->montantSaisi = $montantSaisi;
        return $this;
    }
}
