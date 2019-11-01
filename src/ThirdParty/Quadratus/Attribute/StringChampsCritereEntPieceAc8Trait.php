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
 * Champs critere ent piece ac8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc8Trait {

    /**
     * Champs critere ent piece ac8.
     *
     * @var string
     */
    private $champsCritereEntPieceAc8;

    /**
     * Get the champs critere ent piece ac8.
     *
     * @return string Returns the champs critere ent piece ac8.
     */
    public function getChampsCritereEntPieceAc8() {
        return $this->champsCritereEntPieceAc8;
    }

    /**
     * Set the champs critere ent piece ac8.
     *
     * @param string $champsCritereEntPieceAc8 The champs critere ent piece ac8.
     */
    public function setChampsCritereEntPieceAc8($champsCritereEntPieceAc8) {
        $this->champsCritereEntPieceAc8 = $champsCritereEntPieceAc8;
        return $this;
    }
}
