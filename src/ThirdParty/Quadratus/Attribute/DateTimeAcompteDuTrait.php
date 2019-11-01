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

use DateTime;

/**
 * Acompte du trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeAcompteDuTrait {

    /**
     * Acompte du.
     *
     * @var DateTime|null
     */
    private $acompteDu;

    /**
     * Get the acompte du.
     *
     * @return DateTime|null Returns the acompte du.
     */
    public function getAcompteDu() {
        return $this->acompteDu;
    }

    /**
     * Set the acompte du.
     *
     * @param DateTime|null $acompteDu The acompte du.
     */
    public function setAcompteDu(DateTime $acompteDu = null) {
        $this->acompteDu = $acompteDu;
        return $this;
    }
}
