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
 * Prix moyen nb dec2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrixMoyenNbDec2Trait {

    /**
     * Prix moyen nb dec2.
     *
     * @var int
     */
    private $prixMoyenNbDec2;

    /**
     * Get the prix moyen nb dec2.
     *
     * @return int Returns the prix moyen nb dec2.
     */
    public function getPrixMoyenNbDec2() {
        return $this->prixMoyenNbDec2;
    }

    /**
     * Set the prix moyen nb dec2.
     *
     * @param int $prixMoyenNbDec2 The prix moyen nb dec2.
     */
    public function setPrixMoyenNbDec2($prixMoyenNbDec2) {
        $this->prixMoyenNbDec2 = $prixMoyenNbDec2;
        return $this;
    }
}
