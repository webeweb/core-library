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
 * Champs critere ent piece ac7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc7Trait {

    /**
     * Champs critere ent piece ac7.
     *
     * @var string
     */
    private $champsCritereEntPieceAc7;

    /**
     * Get the champs critere ent piece ac7.
     *
     * @return string Returns the champs critere ent piece ac7.
     */
    public function getChampsCritereEntPieceAc7() {
        return $this->champsCritereEntPieceAc7;
    }

    /**
     * Set the champs critere ent piece ac7.
     *
     * @param string $champsCritereEntPieceAc7 The champs critere ent piece ac7.
     */
    public function setChampsCritereEntPieceAc7($champsCritereEntPieceAc7) {
        $this->champsCritereEntPieceAc7 = $champsCritereEntPieceAc7;
        return $this;
    }
}
