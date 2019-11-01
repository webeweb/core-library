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
 * Prix moyen nb entier2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrixMoyenNbEntier2Trait {

    /**
     * Prix moyen nb entier2.
     *
     * @var int
     */
    private $prixMoyenNbEntier2;

    /**
     * Get the prix moyen nb entier2.
     *
     * @return int Returns the prix moyen nb entier2.
     */
    public function getPrixMoyenNbEntier2() {
        return $this->prixMoyenNbEntier2;
    }

    /**
     * Set the prix moyen nb entier2.
     *
     * @param int $prixMoyenNbEntier2 The prix moyen nb entier2.
     */
    public function setPrixMoyenNbEntier2($prixMoyenNbEntier2) {
        $this->prixMoyenNbEntier2 = $prixMoyenNbEntier2;
        return $this;
    }
}
