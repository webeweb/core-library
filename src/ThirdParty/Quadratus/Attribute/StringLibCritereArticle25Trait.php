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
 * Lib critere article25 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle25Trait {

    /**
     * Lib critere article25.
     *
     * @var string
     */
    private $libCritereArticle25;

    /**
     * Get the lib critere article25.
     *
     * @return string Returns the lib critere article25.
     */
    public function getLibCritereArticle25() {
        return $this->libCritereArticle25;
    }

    /**
     * Set the lib critere article25.
     *
     * @param string $libCritereArticle25 The lib critere article25.
     */
    public function setLibCritereArticle25($libCritereArticle25) {
        $this->libCritereArticle25 = $libCritereArticle25;
        return $this;
    }
}
