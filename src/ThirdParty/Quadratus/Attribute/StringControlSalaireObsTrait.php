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
 * Control salaire obs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringControlSalaireObsTrait {

    /**
     * Control salaire obs.
     *
     * @var string
     */
    private $controlSalaireObs;

    /**
     * Get the control salaire obs.
     *
     * @return string Returns the control salaire obs.
     */
    public function getControlSalaireObs() {
        return $this->controlSalaireObs;
    }

    /**
     * Set the control salaire obs.
     *
     * @param string $controlSalaireObs The control salaire obs.
     */
    public function setControlSalaireObs($controlSalaireObs) {
        $this->controlSalaireObs = $controlSalaireObs;
        return $this;
    }
}
