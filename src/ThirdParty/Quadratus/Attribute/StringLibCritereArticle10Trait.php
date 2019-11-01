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
 * Lib critere article10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle10Trait {

    /**
     * Lib critere article10.
     *
     * @var string
     */
    private $libCritereArticle10;

    /**
     * Get the lib critere article10.
     *
     * @return string Returns the lib critere article10.
     */
    public function getLibCritereArticle10() {
        return $this->libCritereArticle10;
    }

    /**
     * Set the lib critere article10.
     *
     * @param string $libCritereArticle10 The lib critere article10.
     */
    public function setLibCritereArticle10($libCritereArticle10) {
        $this->libCritereArticle10 = $libCritereArticle10;
        return $this;
    }
}
