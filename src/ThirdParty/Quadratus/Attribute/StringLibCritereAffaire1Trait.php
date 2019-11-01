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
 * Lib critere affaire1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereAffaire1Trait {

    /**
     * Lib critere affaire1.
     *
     * @var string
     */
    private $libCritereAffaire1;

    /**
     * Get the lib critere affaire1.
     *
     * @return string Returns the lib critere affaire1.
     */
    public function getLibCritereAffaire1() {
        return $this->libCritereAffaire1;
    }

    /**
     * Set the lib critere affaire1.
     *
     * @param string $libCritereAffaire1 The lib critere affaire1.
     */
    public function setLibCritereAffaire1($libCritereAffaire1) {
        $this->libCritereAffaire1 = $libCritereAffaire1;
        return $this;
    }
}
