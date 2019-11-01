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
 * Lib critere ent piece ac3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereEntPieceAc3Trait {

    /**
     * Lib critere ent piece ac3.
     *
     * @var string
     */
    private $libCritereEntPieceAc3;

    /**
     * Get the lib critere ent piece ac3.
     *
     * @return string Returns the lib critere ent piece ac3.
     */
    public function getLibCritereEntPieceAc3() {
        return $this->libCritereEntPieceAc3;
    }

    /**
     * Set the lib critere ent piece ac3.
     *
     * @param string $libCritereEntPieceAc3 The lib critere ent piece ac3.
     */
    public function setLibCritereEntPieceAc3($libCritereEntPieceAc3) {
        $this->libCritereEntPieceAc3 = $libCritereEntPieceAc3;
        return $this;
    }
}
