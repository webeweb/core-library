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
 * Services paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringServicesPaieTrait {

    /**
     * Services paie.
     *
     * @var string
     */
    private $servicesPaie;

    /**
     * Get the services paie.
     *
     * @return string Returns the services paie.
     */
    public function getServicesPaie() {
        return $this->servicesPaie;
    }

    /**
     * Set the services paie.
     *
     * @param string $servicesPaie The services paie.
     */
    public function setServicesPaie($servicesPaie) {
        $this->servicesPaie = $servicesPaie;
        return $this;
    }
}
