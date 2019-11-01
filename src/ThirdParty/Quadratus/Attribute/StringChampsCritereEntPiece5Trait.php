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
 * Champs critere ent piece5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPiece5Trait {

    /**
     * Champs critere ent piece5.
     *
     * @var string
     */
    private $champsCritereEntPiece5;

    /**
     * Get the champs critere ent piece5.
     *
     * @return string Returns the champs critere ent piece5.
     */
    public function getChampsCritereEntPiece5() {
        return $this->champsCritereEntPiece5;
    }

    /**
     * Set the champs critere ent piece5.
     *
     * @param string $champsCritereEntPiece5 The champs critere ent piece5.
     */
    public function setChampsCritereEntPiece5($champsCritereEntPiece5) {
        $this->champsCritereEntPiece5 = $champsCritereEntPiece5;
        return $this;
    }
}
