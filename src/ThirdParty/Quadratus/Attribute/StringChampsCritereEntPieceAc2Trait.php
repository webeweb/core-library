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
 * Champs critere ent piece ac2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc2Trait {

    /**
     * Champs critere ent piece ac2.
     *
     * @var string
     */
    private $champsCritereEntPieceAc2;

    /**
     * Get the champs critere ent piece ac2.
     *
     * @return string Returns the champs critere ent piece ac2.
     */
    public function getChampsCritereEntPieceAc2() {
        return $this->champsCritereEntPieceAc2;
    }

    /**
     * Set the champs critere ent piece ac2.
     *
     * @param string $champsCritereEntPieceAc2 The champs critere ent piece ac2.
     */
    public function setChampsCritereEntPieceAc2($champsCritereEntPieceAc2) {
        $this->champsCritereEntPieceAc2 = $champsCritereEntPieceAc2;
        return $this;
    }
}
