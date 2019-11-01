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
 * Prix moyen nb entier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrixMoyenNbEntierTrait {

    /**
     * Prix moyen nb entier.
     *
     * @var int
     */
    private $prixMoyenNbEntier;

    /**
     * Get the prix moyen nb entier.
     *
     * @return int Returns the prix moyen nb entier.
     */
    public function getPrixMoyenNbEntier() {
        return $this->prixMoyenNbEntier;
    }

    /**
     * Set the prix moyen nb entier.
     *
     * @param int $prixMoyenNbEntier The prix moyen nb entier.
     */
    public function setPrixMoyenNbEntier($prixMoyenNbEntier) {
        $this->prixMoyenNbEntier = $prixMoyenNbEntier;
        return $this;
    }
}
