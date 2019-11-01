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
 * Lib critere article21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle21Trait {

    /**
     * Lib critere article21.
     *
     * @var string
     */
    private $libCritereArticle21;

    /**
     * Get the lib critere article21.
     *
     * @return string Returns the lib critere article21.
     */
    public function getLibCritereArticle21() {
        return $this->libCritereArticle21;
    }

    /**
     * Set the lib critere article21.
     *
     * @param string $libCritereArticle21 The lib critere article21.
     */
    public function setLibCritereArticle21($libCritereArticle21) {
        $this->libCritereArticle21 = $libCritereArticle21;
        return $this;
    }
}
