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
 * X fer cr req trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCrReqTrait {

    /**
     * X fer cr req.
     *
     * @var bool
     */
    private $xFerCrReq;

    /**
     * Get the x fer cr req.
     *
     * @return bool Returns the x fer cr req.
     */
    public function getXFerCrReq() {
        return $this->xFerCrReq;
    }

    /**
     * Set the x fer cr req.
     *
     * @param bool $xFerCrReq The x fer cr req.
     */
    public function setXFerCrReq($xFerCrReq) {
        $this->xFerCrReq = $xFerCrReq;
        return $this;
    }
}
