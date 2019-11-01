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
 * Champs critere ent piece ac6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc6Trait {

    /**
     * Champs critere ent piece ac6.
     *
     * @var string
     */
    private $champsCritereEntPieceAc6;

    /**
     * Get the champs critere ent piece ac6.
     *
     * @return string Returns the champs critere ent piece ac6.
     */
    public function getChampsCritereEntPieceAc6() {
        return $this->champsCritereEntPieceAc6;
    }

    /**
     * Set the champs critere ent piece ac6.
     *
     * @param string $champsCritereEntPieceAc6 The champs critere ent piece ac6.
     */
    public function setChampsCritereEntPieceAc6($champsCritereEntPieceAc6) {
        $this->champsCritereEntPieceAc6 = $champsCritereEntPieceAc6;
        return $this;
    }
}
