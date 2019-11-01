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
 * Montant14 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant14Trait {

    /**
     * Montant14.
     *
     * @var int
     */
    private $montant14;

    /**
     * Get the montant14.
     *
     * @return int Returns the montant14.
     */
    public function getMontant14() {
        return $this->montant14;
    }

    /**
     * Set the montant14.
     *
     * @param int $montant14 The montant14.
     */
    public function setMontant14($montant14) {
        $this->montant14 = $montant14;
        return $this;
    }
}
