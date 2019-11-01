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
 * Lib critere article8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle8Trait {

    /**
     * Lib critere article8.
     *
     * @var string
     */
    private $libCritereArticle8;

    /**
     * Get the lib critere article8.
     *
     * @return string Returns the lib critere article8.
     */
    public function getLibCritereArticle8() {
        return $this->libCritereArticle8;
    }

    /**
     * Set the lib critere article8.
     *
     * @param string $libCritereArticle8 The lib critere article8.
     */
    public function setLibCritereArticle8($libCritereArticle8) {
        $this->libCritereArticle8 = $libCritereArticle8;
        return $this;
    }
}
