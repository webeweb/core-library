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
 * Detail arrco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDetailArrcoTrait {

    /**
     * Detail arrco.
     *
     * @var bool
     */
    private $detailArrco;

    /**
     * Get the detail arrco.
     *
     * @return bool Returns the detail arrco.
     */
    public function getDetailArrco() {
        return $this->detailArrco;
    }

    /**
     * Set the detail arrco.
     *
     * @param bool $detailArrco The detail arrco.
     */
    public function setDetailArrco($detailArrco) {
        $this->detailArrco = $detailArrco;
        return $this;
    }
}
