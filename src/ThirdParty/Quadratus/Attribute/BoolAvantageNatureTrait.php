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
 * Avantage nature trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvantageNatureTrait {

    /**
     * Avantage nature.
     *
     * @var bool
     */
    private $avantageNature;

    /**
     * Get the avantage nature.
     *
     * @return bool Returns the avantage nature.
     */
    public function getAvantageNature() {
        return $this->avantageNature;
    }

    /**
     * Set the avantage nature.
     *
     * @param bool $avantageNature The avantage nature.
     */
    public function setAvantageNature($avantageNature) {
        $this->avantageNature = $avantageNature;
        return $this;
    }
}
