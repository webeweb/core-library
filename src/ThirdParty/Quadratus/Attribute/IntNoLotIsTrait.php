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
 * No lot is trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotIsTrait {

    /**
     * No lot is.
     *
     * @var int
     */
    private $noLotIs;

    /**
     * Get the no lot is.
     *
     * @return int Returns the no lot is.
     */
    public function getNoLotIs() {
        return $this->noLotIs;
    }

    /**
     * Set the no lot is.
     *
     * @param int $noLotIs The no lot is.
     */
    public function setNoLotIs($noLotIs) {
        $this->noLotIs = $noLotIs;
        return $this;
    }
}
