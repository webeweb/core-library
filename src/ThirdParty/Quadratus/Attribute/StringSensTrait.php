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
 * Sens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSensTrait {

    /**
     * Sens.
     *
     * @var string
     */
    private $sens;

    /**
     * Get the sens.
     *
     * @return string Returns the sens.
     */
    public function getSens() {
        return $this->sens;
    }

    /**
     * Set the sens.
     *
     * @param string $sens The sens.
     */
    public function setSens($sens) {
        $this->sens = $sens;
        return $this;
    }
}
