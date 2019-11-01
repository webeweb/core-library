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
 * No lot interets2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotInterets2Trait {

    /**
     * No lot interets2.
     *
     * @var int
     */
    private $noLotInterets2;

    /**
     * Get the no lot interets2.
     *
     * @return int Returns the no lot interets2.
     */
    public function getNoLotInterets2() {
        return $this->noLotInterets2;
    }

    /**
     * Set the no lot interets2.
     *
     * @param int $noLotInterets2 The no lot interets2.
     */
    public function setNoLotInterets2($noLotInterets2) {
        $this->noLotInterets2 = $noLotInterets2;
        return $this;
    }
}
