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
 * Ya reprise cice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolYaRepriseCiceTrait {

    /**
     * Ya reprise cice.
     *
     * @var bool
     */
    private $yaRepriseCice;

    /**
     * Get the ya reprise cice.
     *
     * @return bool Returns the ya reprise cice.
     */
    public function getYaRepriseCice() {
        return $this->yaRepriseCice;
    }

    /**
     * Set the ya reprise cice.
     *
     * @param bool $yaRepriseCice The ya reprise cice.
     */
    public function setYaRepriseCice($yaRepriseCice) {
        $this->yaRepriseCice = $yaRepriseCice;
        return $this;
    }
}
