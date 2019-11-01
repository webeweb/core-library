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
 * Lib transf cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibTransfCptaTrait {

    /**
     * Lib transf cpta.
     *
     * @var string
     */
    private $libTransfCpta;

    /**
     * Get the lib transf cpta.
     *
     * @return string Returns the lib transf cpta.
     */
    public function getLibTransfCpta() {
        return $this->libTransfCpta;
    }

    /**
     * Set the lib transf cpta.
     *
     * @param string $libTransfCpta The lib transf cpta.
     */
    public function setLibTransfCpta($libTransfCpta) {
        $this->libTransfCpta = $libTransfCpta;
        return $this;
    }
}
