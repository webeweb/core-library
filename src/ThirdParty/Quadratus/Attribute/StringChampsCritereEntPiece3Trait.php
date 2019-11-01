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
 * Champs critere ent piece3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPiece3Trait {

    /**
     * Champs critere ent piece3.
     *
     * @var string
     */
    private $champsCritereEntPiece3;

    /**
     * Get the champs critere ent piece3.
     *
     * @return string Returns the champs critere ent piece3.
     */
    public function getChampsCritereEntPiece3() {
        return $this->champsCritereEntPiece3;
    }

    /**
     * Set the champs critere ent piece3.
     *
     * @param string $champsCritereEntPiece3 The champs critere ent piece3.
     */
    public function setChampsCritereEntPiece3($champsCritereEntPiece3) {
        $this->champsCritereEntPiece3 = $champsCritereEntPiece3;
        return $this;
    }
}
