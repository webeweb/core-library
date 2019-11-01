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
 * Champs critere ent piece ac5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc5Trait {

    /**
     * Champs critere ent piece ac5.
     *
     * @var string
     */
    private $champsCritereEntPieceAc5;

    /**
     * Get the champs critere ent piece ac5.
     *
     * @return string Returns the champs critere ent piece ac5.
     */
    public function getChampsCritereEntPieceAc5() {
        return $this->champsCritereEntPieceAc5;
    }

    /**
     * Set the champs critere ent piece ac5.
     *
     * @param string $champsCritereEntPieceAc5 The champs critere ent piece ac5.
     */
    public function setChampsCritereEntPieceAc5($champsCritereEntPieceAc5) {
        $this->champsCritereEntPieceAc5 = $champsCritereEntPieceAc5;
        return $this;
    }
}
