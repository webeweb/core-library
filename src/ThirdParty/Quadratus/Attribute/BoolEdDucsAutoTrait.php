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
 * Ed ducs auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdDucsAutoTrait {

    /**
     * Ed ducs auto.
     *
     * @var bool
     */
    private $edDucsAuto;

    /**
     * Get the ed ducs auto.
     *
     * @return bool Returns the ed ducs auto.
     */
    public function getEdDucsAuto() {
        return $this->edDucsAuto;
    }

    /**
     * Set the ed ducs auto.
     *
     * @param bool $edDucsAuto The ed ducs auto.
     */
    public function setEdDucsAuto($edDucsAuto) {
        $this->edDucsAuto = $edDucsAuto;
        return $this;
    }
}
