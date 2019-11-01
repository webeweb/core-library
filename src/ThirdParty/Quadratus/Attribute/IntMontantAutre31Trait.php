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
 * Montant autre31 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre31Trait {

    /**
     * Montant autre31.
     *
     * @var int
     */
    private $montantAutre31;

    /**
     * Get the montant autre31.
     *
     * @return int Returns the montant autre31.
     */
    public function getMontantAutre31() {
        return $this->montantAutre31;
    }

    /**
     * Set the montant autre31.
     *
     * @param int $montantAutre31 The montant autre31.
     */
    public function setMontantAutre31($montantAutre31) {
        $this->montantAutre31 = $montantAutre31;
        return $this;
    }
}
