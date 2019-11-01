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
 * Cle des etr communs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleDesEtrCommunsTrait {

    /**
     * Cle des etr communs.
     *
     * @var string
     */
    private $cleDesEtrCommuns;

    /**
     * Get the cle des etr communs.
     *
     * @return string Returns the cle des etr communs.
     */
    public function getCleDesEtrCommuns() {
        return $this->cleDesEtrCommuns;
    }

    /**
     * Set the cle des etr communs.
     *
     * @param string $cleDesEtrCommuns The cle des etr communs.
     */
    public function setCleDesEtrCommuns($cleDesEtrCommuns) {
        $this->cleDesEtrCommuns = $cleDesEtrCommuns;
        return $this;
    }
}
