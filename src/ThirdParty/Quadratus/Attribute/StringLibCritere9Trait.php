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
 * Lib critere9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere9Trait {

    /**
     * Lib critere9.
     *
     * @var string
     */
    private $libCritere9;

    /**
     * Get the lib critere9.
     *
     * @return string Returns the lib critere9.
     */
    public function getLibCritere9() {
        return $this->libCritere9;
    }

    /**
     * Set the lib critere9.
     *
     * @param string $libCritere9 The lib critere9.
     */
    public function setLibCritere9($libCritere9) {
        $this->libCritere9 = $libCritere9;
        return $this;
    }
}
