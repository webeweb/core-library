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
 * Regul tds trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRegulTdsTrait {

    /**
     * Regul tds.
     *
     * @var bool
     */
    private $regulTds;

    /**
     * Get the regul tds.
     *
     * @return bool Returns the regul tds.
     */
    public function getRegulTds() {
        return $this->regulTds;
    }

    /**
     * Set the regul tds.
     *
     * @param bool $regulTds The regul tds.
     */
    public function setRegulTds($regulTds) {
        $this->regulTds = $regulTds;
        return $this;
    }
}
