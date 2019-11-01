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
 * A lettrer auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolALettrerAutoTrait {

    /**
     * A lettrer auto.
     *
     * @var bool
     */
    private $aLettrerAuto;

    /**
     * Get the a lettrer auto.
     *
     * @return bool Returns the a lettrer auto.
     */
    public function getALettrerAuto() {
        return $this->aLettrerAuto;
    }

    /**
     * Set the a lettrer auto.
     *
     * @param bool $aLettrerAuto The a lettrer auto.
     */
    public function setALettrerAuto($aLettrerAuto) {
        $this->aLettrerAuto = $aLettrerAuto;
        return $this;
    }
}
