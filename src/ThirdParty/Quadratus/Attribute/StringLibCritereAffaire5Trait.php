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
 * Lib critere affaire5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereAffaire5Trait {

    /**
     * Lib critere affaire5.
     *
     * @var string
     */
    private $libCritereAffaire5;

    /**
     * Get the lib critere affaire5.
     *
     * @return string Returns the lib critere affaire5.
     */
    public function getLibCritereAffaire5() {
        return $this->libCritereAffaire5;
    }

    /**
     * Set the lib critere affaire5.
     *
     * @param string $libCritereAffaire5 The lib critere affaire5.
     */
    public function setLibCritereAffaire5($libCritereAffaire5) {
        $this->libCritereAffaire5 = $libCritereAffaire5;
        return $this;
    }
}
