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
 * Lib critere article4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle4Trait {

    /**
     * Lib critere article4.
     *
     * @var string
     */
    private $libCritereArticle4;

    /**
     * Get the lib critere article4.
     *
     * @return string Returns the lib critere article4.
     */
    public function getLibCritereArticle4() {
        return $this->libCritereArticle4;
    }

    /**
     * Set the lib critere article4.
     *
     * @param string $libCritereArticle4 The lib critere article4.
     */
    public function setLibCritereArticle4($libCritereArticle4) {
        $this->libCritereArticle4 = $libCritereArticle4;
        return $this;
    }
}
