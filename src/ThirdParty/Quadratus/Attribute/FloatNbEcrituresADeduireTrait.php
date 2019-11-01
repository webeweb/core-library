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
 * Nb ecritures a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbEcrituresADeduireTrait {

    /**
     * Nb ecritures a deduire.
     *
     * @var float
     */
    private $nbEcrituresADeduire;

    /**
     * Get the nb ecritures a deduire.
     *
     * @return float Returns the nb ecritures a deduire.
     */
    public function getNbEcrituresADeduire() {
        return $this->nbEcrituresADeduire;
    }

    /**
     * Set the nb ecritures a deduire.
     *
     * @param float $nbEcrituresADeduire The nb ecritures a deduire.
     */
    public function setNbEcrituresADeduire($nbEcrituresADeduire) {
        $this->nbEcrituresADeduire = $nbEcrituresADeduire;
        return $this;
    }
}
