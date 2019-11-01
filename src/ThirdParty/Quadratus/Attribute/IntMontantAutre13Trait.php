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
 * Montant autre13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre13Trait {

    /**
     * Montant autre13.
     *
     * @var int
     */
    private $montantAutre13;

    /**
     * Get the montant autre13.
     *
     * @return int Returns the montant autre13.
     */
    public function getMontantAutre13() {
        return $this->montantAutre13;
    }

    /**
     * Set the montant autre13.
     *
     * @param int $montantAutre13 The montant autre13.
     */
    public function setMontantAutre13($montantAutre13) {
        $this->montantAutre13 = $montantAutre13;
        return $this;
    }
}
