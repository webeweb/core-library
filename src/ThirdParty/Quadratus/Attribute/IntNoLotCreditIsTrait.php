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
 * No lot credit is trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotCreditIsTrait {

    /**
     * No lot credit is.
     *
     * @var int
     */
    private $noLotCreditIs;

    /**
     * Get the no lot credit is.
     *
     * @return int Returns the no lot credit is.
     */
    public function getNoLotCreditIs() {
        return $this->noLotCreditIs;
    }

    /**
     * Set the no lot credit is.
     *
     * @param int $noLotCreditIs The no lot credit is.
     */
    public function setNoLotCreditIs($noLotCreditIs) {
        $this->noLotCreditIs = $noLotCreditIs;
        return $this;
    }
}
