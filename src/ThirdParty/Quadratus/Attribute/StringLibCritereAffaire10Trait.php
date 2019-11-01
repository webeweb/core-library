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
 * Lib critere affaire10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereAffaire10Trait {

    /**
     * Lib critere affaire10.
     *
     * @var string
     */
    private $libCritereAffaire10;

    /**
     * Get the lib critere affaire10.
     *
     * @return string Returns the lib critere affaire10.
     */
    public function getLibCritereAffaire10() {
        return $this->libCritereAffaire10;
    }

    /**
     * Set the lib critere affaire10.
     *
     * @param string $libCritereAffaire10 The lib critere affaire10.
     */
    public function setLibCritereAffaire10($libCritereAffaire10) {
        $this->libCritereAffaire10 = $libCritereAffaire10;
        return $this;
    }
}
