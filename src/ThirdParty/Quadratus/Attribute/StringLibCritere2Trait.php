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
 * Lib critere2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere2Trait {

    /**
     * Lib critere2.
     *
     * @var string
     */
    private $libCritere2;

    /**
     * Get the lib critere2.
     *
     * @return string Returns the lib critere2.
     */
    public function getLibCritere2() {
        return $this->libCritere2;
    }

    /**
     * Set the lib critere2.
     *
     * @param string $libCritere2 The lib critere2.
     */
    public function setLibCritere2($libCritere2) {
        $this->libCritere2 = $libCritere2;
        return $this;
    }
}
