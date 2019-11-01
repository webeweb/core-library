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
 * Montant32 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant32Trait {

    /**
     * Montant32.
     *
     * @var int
     */
    private $montant32;

    /**
     * Get the montant32.
     *
     * @return int Returns the montant32.
     */
    public function getMontant32() {
        return $this->montant32;
    }

    /**
     * Set the montant32.
     *
     * @param int $montant32 The montant32.
     */
    public function setMontant32($montant32) {
        $this->montant32 = $montant32;
        return $this;
    }
}
