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
 * Champs critere ent piece8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPiece8Trait {

    /**
     * Champs critere ent piece8.
     *
     * @var string
     */
    private $champsCritereEntPiece8;

    /**
     * Get the champs critere ent piece8.
     *
     * @return string Returns the champs critere ent piece8.
     */
    public function getChampsCritereEntPiece8() {
        return $this->champsCritereEntPiece8;
    }

    /**
     * Set the champs critere ent piece8.
     *
     * @param string $champsCritereEntPiece8 The champs critere ent piece8.
     */
    public function setChampsCritereEntPiece8($champsCritereEntPiece8) {
        $this->champsCritereEntPiece8 = $champsCritereEntPiece8;
        return $this;
    }
}
