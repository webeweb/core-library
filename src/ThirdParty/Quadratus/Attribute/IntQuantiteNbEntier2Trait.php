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
 * Quantite nb entier2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQuantiteNbEntier2Trait {

    /**
     * Quantite nb entier2.
     *
     * @var int
     */
    private $quantiteNbEntier2;

    /**
     * Get the quantite nb entier2.
     *
     * @return int Returns the quantite nb entier2.
     */
    public function getQuantiteNbEntier2() {
        return $this->quantiteNbEntier2;
    }

    /**
     * Set the quantite nb entier2.
     *
     * @param int $quantiteNbEntier2 The quantite nb entier2.
     */
    public function setQuantiteNbEntier2($quantiteNbEntier2) {
        $this->quantiteNbEntier2 = $quantiteNbEntier2;
        return $this;
    }
}
