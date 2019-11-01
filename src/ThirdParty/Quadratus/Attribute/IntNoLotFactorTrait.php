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
 * No lot factor trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotFactorTrait {

    /**
     * No lot factor.
     *
     * @var int
     */
    private $noLotFactor;

    /**
     * Get the no lot factor.
     *
     * @return int Returns the no lot factor.
     */
    public function getNoLotFactor() {
        return $this->noLotFactor;
    }

    /**
     * Set the no lot factor.
     *
     * @param int $noLotFactor The no lot factor.
     */
    public function setNoLotFactor($noLotFactor) {
        $this->noLotFactor = $noLotFactor;
        return $this;
    }
}
