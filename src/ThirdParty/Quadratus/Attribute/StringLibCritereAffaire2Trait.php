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
 * Lib critere affaire2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereAffaire2Trait {

    /**
     * Lib critere affaire2.
     *
     * @var string
     */
    private $libCritereAffaire2;

    /**
     * Get the lib critere affaire2.
     *
     * @return string Returns the lib critere affaire2.
     */
    public function getLibCritereAffaire2() {
        return $this->libCritereAffaire2;
    }

    /**
     * Set the lib critere affaire2.
     *
     * @param string $libCritereAffaire2 The lib critere affaire2.
     */
    public function setLibCritereAffaire2($libCritereAffaire2) {
        $this->libCritereAffaire2 = $libCritereAffaire2;
        return $this;
    }
}
