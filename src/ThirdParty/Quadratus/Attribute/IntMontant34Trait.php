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
 * Montant34 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant34Trait {

    /**
     * Montant34.
     *
     * @var int
     */
    private $montant34;

    /**
     * Get the montant34.
     *
     * @return int Returns the montant34.
     */
    public function getMontant34() {
        return $this->montant34;
    }

    /**
     * Set the montant34.
     *
     * @param int $montant34 The montant34.
     */
    public function setMontant34($montant34) {
        $this->montant34 = $montant34;
        return $this;
    }
}
