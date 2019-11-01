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
 * Detail cb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDetailCbTrait {

    /**
     * Detail cb.
     *
     * @var bool
     */
    private $detailCb;

    /**
     * Get the detail cb.
     *
     * @return bool Returns the detail cb.
     */
    public function getDetailCb() {
        return $this->detailCb;
    }

    /**
     * Set the detail cb.
     *
     * @param bool $detailCb The detail cb.
     */
    public function setDetailCb($detailCb) {
        $this->detailCb = $detailCb;
        return $this;
    }
}
