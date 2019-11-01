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
 * Montant fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMontantFixeTrait {

    /**
     * Montant fixe.
     *
     * @var bool
     */
    private $montantFixe;

    /**
     * Get the montant fixe.
     *
     * @return bool Returns the montant fixe.
     */
    public function getMontantFixe() {
        return $this->montantFixe;
    }

    /**
     * Set the montant fixe.
     *
     * @param bool $montantFixe The montant fixe.
     */
    public function setMontantFixe($montantFixe) {
        $this->montantFixe = $montantFixe;
        return $this;
    }
}
