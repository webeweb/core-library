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
 * Prix moyen nb dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrixMoyenNbDecTrait {

    /**
     * Prix moyen nb dec.
     *
     * @var int
     */
    private $prixMoyenNbDec;

    /**
     * Get the prix moyen nb dec.
     *
     * @return int Returns the prix moyen nb dec.
     */
    public function getPrixMoyenNbDec() {
        return $this->prixMoyenNbDec;
    }

    /**
     * Set the prix moyen nb dec.
     *
     * @param int $prixMoyenNbDec The prix moyen nb dec.
     */
    public function setPrixMoyenNbDec($prixMoyenNbDec) {
        $this->prixMoyenNbDec = $prixMoyenNbDec;
        return $this;
    }
}
