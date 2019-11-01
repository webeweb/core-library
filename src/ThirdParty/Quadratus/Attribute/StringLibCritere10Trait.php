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
 * Lib critere10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere10Trait {

    /**
     * Lib critere10.
     *
     * @var string
     */
    private $libCritere10;

    /**
     * Get the lib critere10.
     *
     * @return string Returns the lib critere10.
     */
    public function getLibCritere10() {
        return $this->libCritere10;
    }

    /**
     * Set the lib critere10.
     *
     * @param string $libCritere10 The lib critere10.
     */
    public function setLibCritere10($libCritere10) {
        $this->libCritere10 = $libCritere10;
        return $this;
    }
}
