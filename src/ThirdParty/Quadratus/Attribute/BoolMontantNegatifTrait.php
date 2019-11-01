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
 * Montant negatif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMontantNegatifTrait {

    /**
     * Montant negatif.
     *
     * @var bool
     */
    private $montantNegatif;

    /**
     * Get the montant negatif.
     *
     * @return bool Returns the montant negatif.
     */
    public function getMontantNegatif() {
        return $this->montantNegatif;
    }

    /**
     * Set the montant negatif.
     *
     * @param bool $montantNegatif The montant negatif.
     */
    public function setMontantNegatif($montantNegatif) {
        $this->montantNegatif = $montantNegatif;
        return $this;
    }
}
