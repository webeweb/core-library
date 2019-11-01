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
 * Lib critere affaire8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereAffaire8Trait {

    /**
     * Lib critere affaire8.
     *
     * @var string
     */
    private $libCritereAffaire8;

    /**
     * Get the lib critere affaire8.
     *
     * @return string Returns the lib critere affaire8.
     */
    public function getLibCritereAffaire8() {
        return $this->libCritereAffaire8;
    }

    /**
     * Set the lib critere affaire8.
     *
     * @param string $libCritereAffaire8 The lib critere affaire8.
     */
    public function setLibCritereAffaire8($libCritereAffaire8) {
        $this->libCritereAffaire8 = $libCritereAffaire8;
        return $this;
    }
}
