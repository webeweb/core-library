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
 * Cp sans provisions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCpSansProvisionsTrait {

    /**
     * Cp sans provisions.
     *
     * @var bool
     */
    private $cpSansProvisions;

    /**
     * Get the cp sans provisions.
     *
     * @return bool Returns the cp sans provisions.
     */
    public function getCpSansProvisions() {
        return $this->cpSansProvisions;
    }

    /**
     * Set the cp sans provisions.
     *
     * @param bool $cpSansProvisions The cp sans provisions.
     */
    public function setCpSansProvisions($cpSansProvisions) {
        $this->cpSansProvisions = $cpSansProvisions;
        return $this;
    }
}
