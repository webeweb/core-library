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
 * Lot serie autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLotSerieAutreTrait {

    /**
     * Lot serie autre.
     *
     * @var bool
     */
    private $lotSerieAutre;

    /**
     * Get the lot serie autre.
     *
     * @return bool Returns the lot serie autre.
     */
    public function getLotSerieAutre() {
        return $this->lotSerieAutre;
    }

    /**
     * Set the lot serie autre.
     *
     * @param bool $lotSerieAutre The lot serie autre.
     */
    public function setLotSerieAutre($lotSerieAutre) {
        $this->lotSerieAutre = $lotSerieAutre;
        return $this;
    }
}
