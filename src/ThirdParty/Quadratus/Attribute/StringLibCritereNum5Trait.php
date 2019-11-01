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
 * Lib critere num5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereNum5Trait {

    /**
     * Lib critere num5.
     *
     * @var string
     */
    private $libCritereNum5;

    /**
     * Get the lib critere num5.
     *
     * @return string Returns the lib critere num5.
     */
    public function getLibCritereNum5() {
        return $this->libCritereNum5;
    }

    /**
     * Set the lib critere num5.
     *
     * @param string $libCritereNum5 The lib critere num5.
     */
    public function setLibCritereNum5($libCritereNum5) {
        $this->libCritereNum5 = $libCritereNum5;
        return $this;
    }
}
