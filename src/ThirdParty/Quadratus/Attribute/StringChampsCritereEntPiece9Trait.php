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
 * Champs critere ent piece9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereEntPiece9Trait {

    /**
     * Champs critere ent piece9.
     *
     * @var string
     */
    private $champsCritereEntPiece9;

    /**
     * Get the champs critere ent piece9.
     *
     * @return string Returns the champs critere ent piece9.
     */
    public function getChampsCritereEntPiece9() {
        return $this->champsCritereEntPiece9;
    }

    /**
     * Set the champs critere ent piece9.
     *
     * @param string $champsCritereEntPiece9 The champs critere ent piece9.
     */
    public function setChampsCritereEntPiece9($champsCritereEntPiece9) {
        $this->champsCritereEntPiece9 = $champsCritereEntPiece9;
        return $this;
    }
}
