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
 * Integ net paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIntegNetPayeTrait {

    /**
     * Integ net paye.
     *
     * @var bool
     */
    private $integNetPaye;

    /**
     * Get the integ net paye.
     *
     * @return bool Returns the integ net paye.
     */
    public function getIntegNetPaye() {
        return $this->integNetPaye;
    }

    /**
     * Set the integ net paye.
     *
     * @param bool $integNetPaye The integ net paye.
     */
    public function setIntegNetPaye($integNetPaye) {
        $this->integNetPaye = $integNetPaye;
        return $this;
    }
}
