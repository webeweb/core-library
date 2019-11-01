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
 * Champs critere ent piece ac10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPieceAc10Trait {

    /**
     * Champs critere ent piece ac10.
     *
     * @var string
     */
    private $champsCritereEntPieceAc10;

    /**
     * Get the champs critere ent piece ac10.
     *
     * @return string Returns the champs critere ent piece ac10.
     */
    public function getChampsCritereEntPieceAc10() {
        return $this->champsCritereEntPieceAc10;
    }

    /**
     * Set the champs critere ent piece ac10.
     *
     * @param string $champsCritereEntPieceAc10 The champs critere ent piece ac10.
     */
    public function setChampsCritereEntPieceAc10($champsCritereEntPieceAc10) {
        $this->champsCritereEntPieceAc10 = $champsCritereEntPieceAc10;
        return $this;
    }
}
