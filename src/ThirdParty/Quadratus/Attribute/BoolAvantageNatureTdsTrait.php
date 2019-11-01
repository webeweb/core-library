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
 * Avantage nature tds trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvantageNatureTdsTrait {

    /**
     * Avantage nature tds.
     *
     * @var bool
     */
    private $avantageNatureTds;

    /**
     * Get the avantage nature tds.
     *
     * @return bool Returns the avantage nature tds.
     */
    public function getAvantageNatureTds() {
        return $this->avantageNatureTds;
    }

    /**
     * Set the avantage nature tds.
     *
     * @param bool $avantageNatureTds The avantage nature tds.
     */
    public function setAvantageNatureTds($avantageNatureTds) {
        $this->avantageNatureTds = $avantageNatureTds;
        return $this;
    }
}
