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
 * Champs critere ent piece ac3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc3Trait {

    /**
     * Champs critere ent piece ac3.
     *
     * @var string
     */
    private $champsCritereEntPieceAc3;

    /**
     * Get the champs critere ent piece ac3.
     *
     * @return string Returns the champs critere ent piece ac3.
     */
    public function getChampsCritereEntPieceAc3() {
        return $this->champsCritereEntPieceAc3;
    }

    /**
     * Set the champs critere ent piece ac3.
     *
     * @param string $champsCritereEntPieceAc3 The champs critere ent piece ac3.
     */
    public function setChampsCritereEntPieceAc3($champsCritereEntPieceAc3) {
        $this->champsCritereEntPieceAc3 = $champsCritereEntPieceAc3;
        return $this;
    }
}
