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
 * Lib critere tab1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereTab1Trait {

    /**
     * Lib critere tab1.
     *
     * @var string
     */
    private $libCritereTab1;

    /**
     * Get the lib critere tab1.
     *
     * @return string Returns the lib critere tab1.
     */
    public function getLibCritereTab1() {
        return $this->libCritereTab1;
    }

    /**
     * Set the lib critere tab1.
     *
     * @param string $libCritereTab1 The lib critere tab1.
     */
    public function setLibCritereTab1($libCritereTab1) {
        $this->libCritereTab1 = $libCritereTab1;
        return $this;
    }
}
