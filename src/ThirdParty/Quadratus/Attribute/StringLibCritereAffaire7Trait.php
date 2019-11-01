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
 * Lib critere affaire7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereAffaire7Trait {

    /**
     * Lib critere affaire7.
     *
     * @var string
     */
    private $libCritereAffaire7;

    /**
     * Get the lib critere affaire7.
     *
     * @return string Returns the lib critere affaire7.
     */
    public function getLibCritereAffaire7() {
        return $this->libCritereAffaire7;
    }

    /**
     * Set the lib critere affaire7.
     *
     * @param string $libCritereAffaire7 The lib critere affaire7.
     */
    public function setLibCritereAffaire7($libCritereAffaire7) {
        $this->libCritereAffaire7 = $libCritereAffaire7;
        return $this;
    }
}
