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
 * Lib critere affaire9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereAffaire9Trait {

    /**
     * Lib critere affaire9.
     *
     * @var string
     */
    private $libCritereAffaire9;

    /**
     * Get the lib critere affaire9.
     *
     * @return string Returns the lib critere affaire9.
     */
    public function getLibCritereAffaire9() {
        return $this->libCritereAffaire9;
    }

    /**
     * Set the lib critere affaire9.
     *
     * @param string $libCritereAffaire9 The lib critere affaire9.
     */
    public function setLibCritereAffaire9($libCritereAffaire9) {
        $this->libCritereAffaire9 = $libCritereAffaire9;
        return $this;
    }
}
