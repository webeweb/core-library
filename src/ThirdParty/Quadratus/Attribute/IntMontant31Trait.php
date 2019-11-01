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
 * Montant31 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant31Trait {

    /**
     * Montant31.
     *
     * @var int
     */
    private $montant31;

    /**
     * Get the montant31.
     *
     * @return int Returns the montant31.
     */
    public function getMontant31() {
        return $this->montant31;
    }

    /**
     * Set the montant31.
     *
     * @param int $montant31 The montant31.
     */
    public function setMontant31($montant31) {
        $this->montant31 = $montant31;
        return $this;
    }
}
