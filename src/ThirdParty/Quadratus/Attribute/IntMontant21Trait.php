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
 * Montant21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant21Trait {

    /**
     * Montant21.
     *
     * @var int
     */
    private $montant21;

    /**
     * Get the montant21.
     *
     * @return int Returns the montant21.
     */
    public function getMontant21() {
        return $this->montant21;
    }

    /**
     * Set the montant21.
     *
     * @param int $montant21 The montant21.
     */
    public function setMontant21($montant21) {
        $this->montant21 = $montant21;
        return $this;
    }
}
