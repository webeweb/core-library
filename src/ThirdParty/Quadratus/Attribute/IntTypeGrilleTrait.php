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
 * Type grille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypeGrilleTrait {

    /**
     * Type grille.
     *
     * @var int
     */
    private $typeGrille;

    /**
     * Get the type grille.
     *
     * @return int Returns the type grille.
     */
    public function getTypeGrille() {
        return $this->typeGrille;
    }

    /**
     * Set the type grille.
     *
     * @param int $typeGrille The type grille.
     */
    public function setTypeGrille($typeGrille) {
        $this->typeGrille = $typeGrille;
        return $this;
    }
}
