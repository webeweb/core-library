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
 * Champs critere ent piece ac4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc4Trait {

    /**
     * Champs critere ent piece ac4.
     *
     * @var string
     */
    private $champsCritereEntPieceAc4;

    /**
     * Get the champs critere ent piece ac4.
     *
     * @return string Returns the champs critere ent piece ac4.
     */
    public function getChampsCritereEntPieceAc4() {
        return $this->champsCritereEntPieceAc4;
    }

    /**
     * Set the champs critere ent piece ac4.
     *
     * @param string $champsCritereEntPieceAc4 The champs critere ent piece ac4.
     */
    public function setChampsCritereEntPieceAc4($champsCritereEntPieceAc4) {
        $this->champsCritereEntPieceAc4 = $champsCritereEntPieceAc4;
        return $this;
    }
}
