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
 * Lib critere3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere3Trait {

    /**
     * Lib critere3.
     *
     * @var string
     */
    private $libCritere3;

    /**
     * Get the lib critere3.
     *
     * @return string Returns the lib critere3.
     */
    public function getLibCritere3() {
        return $this->libCritere3;
    }

    /**
     * Set the lib critere3.
     *
     * @param string $libCritere3 The lib critere3.
     */
    public function setLibCritere3($libCritere3) {
        $this->libCritere3 = $libCritere3;
        return $this;
    }
}
