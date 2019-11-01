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
 * Lib critere affaire3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereAffaire3Trait {

    /**
     * Lib critere affaire3.
     *
     * @var string
     */
    private $libCritereAffaire3;

    /**
     * Get the lib critere affaire3.
     *
     * @return string Returns the lib critere affaire3.
     */
    public function getLibCritereAffaire3() {
        return $this->libCritereAffaire3;
    }

    /**
     * Set the lib critere affaire3.
     *
     * @param string $libCritereAffaire3 The lib critere affaire3.
     */
    public function setLibCritereAffaire3($libCritereAffaire3) {
        $this->libCritereAffaire3 = $libCritereAffaire3;
        return $this;
    }
}
