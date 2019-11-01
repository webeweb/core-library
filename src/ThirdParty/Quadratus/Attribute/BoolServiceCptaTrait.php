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
 * Service cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolServiceCptaTrait {

    /**
     * Service cpta.
     *
     * @var bool
     */
    private $serviceCpta;

    /**
     * Get the service cpta.
     *
     * @return bool Returns the service cpta.
     */
    public function getServiceCpta() {
        return $this->serviceCpta;
    }

    /**
     * Set the service cpta.
     *
     * @param bool $serviceCpta The service cpta.
     */
    public function setServiceCpta($serviceCpta) {
        $this->serviceCpta = $serviceCpta;
        return $this;
    }
}
