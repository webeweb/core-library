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
 * Champs critere ent piece ac1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc1Trait {

    /**
     * Champs critere ent piece ac1.
     *
     * @var string
     */
    private $champsCritereEntPieceAc1;

    /**
     * Get the champs critere ent piece ac1.
     *
     * @return string Returns the champs critere ent piece ac1.
     */
    public function getChampsCritereEntPieceAc1() {
        return $this->champsCritereEntPieceAc1;
    }

    /**
     * Set the champs critere ent piece ac1.
     *
     * @param string $champsCritereEntPieceAc1 The champs critere ent piece ac1.
     */
    public function setChampsCritereEntPieceAc1($champsCritereEntPieceAc1) {
        $this->champsCritereEntPieceAc1 = $champsCritereEntPieceAc1;
        return $this;
    }
}
