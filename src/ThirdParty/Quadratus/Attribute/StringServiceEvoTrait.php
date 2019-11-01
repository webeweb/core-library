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
 * Service evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringServiceEvoTrait {

    /**
     * Service evo.
     *
     * @var string
     */
    private $serviceEvo;

    /**
     * Get the service evo.
     *
     * @return string Returns the service evo.
     */
    public function getServiceEvo() {
        return $this->serviceEvo;
    }

    /**
     * Set the service evo.
     *
     * @param string $serviceEvo The service evo.
     */
    public function setServiceEvo($serviceEvo) {
        $this->serviceEvo = $serviceEvo;
        return $this;
    }
}
