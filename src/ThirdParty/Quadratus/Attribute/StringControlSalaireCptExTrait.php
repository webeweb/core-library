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
 * Control salaire cpt ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringControlSalaireCptExTrait {

    /**
     * Control salaire cpt ex.
     *
     * @var string
     */
    private $controlSalaireCptEx;

    /**
     * Get the control salaire cpt ex.
     *
     * @return string Returns the control salaire cpt ex.
     */
    public function getControlSalaireCptEx() {
        return $this->controlSalaireCptEx;
    }

    /**
     * Set the control salaire cpt ex.
     *
     * @param string $controlSalaireCptEx The control salaire cpt ex.
     */
    public function setControlSalaireCptEx($controlSalaireCptEx) {
        $this->controlSalaireCptEx = $controlSalaireCptEx;
        return $this;
    }
}
