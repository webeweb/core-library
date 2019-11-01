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
 * No lot interets trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotInteretsTrait {

    /**
     * No lot interets.
     *
     * @var int
     */
    private $noLotInterets;

    /**
     * Get the no lot interets.
     *
     * @return int Returns the no lot interets.
     */
    public function getNoLotInterets() {
        return $this->noLotInterets;
    }

    /**
     * Set the no lot interets.
     *
     * @param int $noLotInterets The no lot interets.
     */
    public function setNoLotInterets($noLotInterets) {
        $this->noLotInterets = $noLotInterets;
        return $this;
    }
}
