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
 * Cle jrn lib communs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleJrnLibCommunsTrait {

    /**
     * Cle jrn lib communs.
     *
     * @var string
     */
    private $cleJrnLibCommuns;

    /**
     * Get the cle jrn lib communs.
     *
     * @return string Returns the cle jrn lib communs.
     */
    public function getCleJrnLibCommuns() {
        return $this->cleJrnLibCommuns;
    }

    /**
     * Set the cle jrn lib communs.
     *
     * @param string $cleJrnLibCommuns The cle jrn lib communs.
     */
    public function setCleJrnLibCommuns($cleJrnLibCommuns) {
        $this->cleJrnLibCommuns = $cleJrnLibCommuns;
        return $this;
    }
}
