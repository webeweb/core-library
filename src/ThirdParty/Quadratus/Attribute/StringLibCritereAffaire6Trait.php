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
 * Lib critere affaire6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereAffaire6Trait {

    /**
     * Lib critere affaire6.
     *
     * @var string
     */
    private $libCritereAffaire6;

    /**
     * Get the lib critere affaire6.
     *
     * @return string Returns the lib critere affaire6.
     */
    public function getLibCritereAffaire6() {
        return $this->libCritereAffaire6;
    }

    /**
     * Set the lib critere affaire6.
     *
     * @param string $libCritereAffaire6 The lib critere affaire6.
     */
    public function setLibCritereAffaire6($libCritereAffaire6) {
        $this->libCritereAffaire6 = $libCritereAffaire6;
        return $this;
    }
}
