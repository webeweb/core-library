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
 * Champs critere ent piece2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPiece2Trait {

    /**
     * Champs critere ent piece2.
     *
     * @var string
     */
    private $champsCritereEntPiece2;

    /**
     * Get the champs critere ent piece2.
     *
     * @return string Returns the champs critere ent piece2.
     */
    public function getChampsCritereEntPiece2() {
        return $this->champsCritereEntPiece2;
    }

    /**
     * Set the champs critere ent piece2.
     *
     * @param string $champsCritereEntPiece2 The champs critere ent piece2.
     */
    public function setChampsCritereEntPiece2($champsCritereEntPiece2) {
        $this->champsCritereEntPiece2 = $champsCritereEntPiece2;
        return $this;
    }
}
