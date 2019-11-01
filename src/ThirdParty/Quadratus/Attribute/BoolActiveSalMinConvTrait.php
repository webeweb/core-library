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
 * Active sal min conv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveSalMinConvTrait {

    /**
     * Active sal min conv.
     *
     * @var bool
     */
    private $activeSalMinConv;

    /**
     * Get the active sal min conv.
     *
     * @return bool Returns the active sal min conv.
     */
    public function getActiveSalMinConv() {
        return $this->activeSalMinConv;
    }

    /**
     * Set the active sal min conv.
     *
     * @param bool $activeSalMinConv The active sal min conv.
     */
    public function setActiveSalMinConv($activeSalMinConv) {
        $this->activeSalMinConv = $activeSalMinConv;
        return $this;
    }
}
