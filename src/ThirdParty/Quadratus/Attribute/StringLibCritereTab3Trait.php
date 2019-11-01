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
 * Lib critere tab3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereTab3Trait {

    /**
     * Lib critere tab3.
     *
     * @var string
     */
    private $libCritereTab3;

    /**
     * Get the lib critere tab3.
     *
     * @return string Returns the lib critere tab3.
     */
    public function getLibCritereTab3() {
        return $this->libCritereTab3;
    }

    /**
     * Set the lib critere tab3.
     *
     * @param string $libCritereTab3 The lib critere tab3.
     */
    public function setLibCritereTab3($libCritereTab3) {
        $this->libCritereTab3 = $libCritereTab3;
        return $this;
    }
}
