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
 * Champs critere ent piece1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPiece1Trait {

    /**
     * Champs critere ent piece1.
     *
     * @var string
     */
    private $champsCritereEntPiece1;

    /**
     * Get the champs critere ent piece1.
     *
     * @return string Returns the champs critere ent piece1.
     */
    public function getChampsCritereEntPiece1() {
        return $this->champsCritereEntPiece1;
    }

    /**
     * Set the champs critere ent piece1.
     *
     * @param string $champsCritereEntPiece1 The champs critere ent piece1.
     */
    public function setChampsCritereEntPiece1($champsCritereEntPiece1) {
        $this->champsCritereEntPiece1 = $champsCritereEntPiece1;
        return $this;
    }
}
