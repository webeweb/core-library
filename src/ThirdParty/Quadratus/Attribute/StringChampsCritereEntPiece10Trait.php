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
 * Champs critere ent piece10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPiece10Trait {

    /**
     * Champs critere ent piece10.
     *
     * @var string
     */
    private $champsCritereEntPiece10;

    /**
     * Get the champs critere ent piece10.
     *
     * @return string Returns the champs critere ent piece10.
     */
    public function getChampsCritereEntPiece10() {
        return $this->champsCritereEntPiece10;
    }

    /**
     * Set the champs critere ent piece10.
     *
     * @param string $champsCritereEntPiece10 The champs critere ent piece10.
     */
    public function setChampsCritereEntPiece10($champsCritereEntPiece10) {
        $this->champsCritereEntPiece10 = $champsCritereEntPiece10;
        return $this;
    }
}
