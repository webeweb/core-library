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
 * Lib auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAutoTrait {

    /**
     * Lib auto.
     *
     * @var string
     */
    private $libAuto;

    /**
     * Get the lib auto.
     *
     * @return string Returns the lib auto.
     */
    public function getLibAuto() {
        return $this->libAuto;
    }

    /**
     * Set the lib auto.
     *
     * @param string $libAuto The lib auto.
     */
    public function setLibAuto($libAuto) {
        $this->libAuto = $libAuto;
        return $this;
    }
}
