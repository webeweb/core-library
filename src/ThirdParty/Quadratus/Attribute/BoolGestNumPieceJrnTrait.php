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
 * Gest num piece jrn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestNumPieceJrnTrait {

    /**
     * Gest num piece jrn.
     *
     * @var bool
     */
    private $gestNumPieceJrn;

    /**
     * Get the gest num piece jrn.
     *
     * @return bool Returns the gest num piece jrn.
     */
    public function getGestNumPieceJrn() {
        return $this->gestNumPieceJrn;
    }

    /**
     * Set the gest num piece jrn.
     *
     * @param bool $gestNumPieceJrn The gest num piece jrn.
     */
    public function setGestNumPieceJrn($gestNumPieceJrn) {
        $this->gestNumPieceJrn = $gestNumPieceJrn;
        return $this;
    }
}
