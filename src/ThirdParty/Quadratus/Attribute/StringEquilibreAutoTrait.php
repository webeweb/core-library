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
 * Equilibre auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEquilibreAutoTrait {

    /**
     * Equilibre auto.
     *
     * @var string
     */
    private $equilibreAuto;

    /**
     * Get the equilibre auto.
     *
     * @return string Returns the equilibre auto.
     */
    public function getEquilibreAuto() {
        return $this->equilibreAuto;
    }

    /**
     * Set the equilibre auto.
     *
     * @param string $equilibreAuto The equilibre auto.
     */
    public function setEquilibreAuto($equilibreAuto) {
        $this->equilibreAuto = $equilibreAuto;
        return $this;
    }
}
