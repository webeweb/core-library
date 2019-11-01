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
 * Montant11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant11Trait {

    /**
     * Montant11.
     *
     * @var int
     */
    private $montant11;

    /**
     * Get the montant11.
     *
     * @return int Returns the montant11.
     */
    public function getMontant11() {
        return $this->montant11;
    }

    /**
     * Set the montant11.
     *
     * @param int $montant11 The montant11.
     */
    public function setMontant11($montant11) {
        $this->montant11 = $montant11;
        return $this;
    }
}
