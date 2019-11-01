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
 * Champs critere ent piece ac9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc9Trait {

    /**
     * Champs critere ent piece ac9.
     *
     * @var string
     */
    private $champsCritereEntPieceAc9;

    /**
     * Get the champs critere ent piece ac9.
     *
     * @return string Returns the champs critere ent piece ac9.
     */
    public function getChampsCritereEntPieceAc9() {
        return $this->champsCritereEntPieceAc9;
    }

    /**
     * Set the champs critere ent piece ac9.
     *
     * @param string $champsCritereEntPieceAc9 The champs critere ent piece ac9.
     */
    public function setChampsCritereEntPieceAc9($champsCritereEntPieceAc9) {
        $this->champsCritereEntPieceAc9 = $champsCritereEntPieceAc9;
        return $this;
    }
}
