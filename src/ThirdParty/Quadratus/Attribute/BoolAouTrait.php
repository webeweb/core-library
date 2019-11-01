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
 * Aou trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAouTrait {

    /**
     * Aou.
     *
     * @var bool
     */
    private $aou;

    /**
     * Get the aou.
     *
     * @return bool Returns the aou.
     */
    public function getAou() {
        return $this->aou;
    }

    /**
     * Set the aou.
     *
     * @param bool $aou The aou.
     */
    public function setAou($aou) {
        $this->aou = $aou;
        return $this;
    }
}
