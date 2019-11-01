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
 * Lib critere article5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle5Trait {

    /**
     * Lib critere article5.
     *
     * @var string
     */
    private $libCritereArticle5;

    /**
     * Get the lib critere article5.
     *
     * @return string Returns the lib critere article5.
     */
    public function getLibCritereArticle5() {
        return $this->libCritereArticle5;
    }

    /**
     * Set the lib critere article5.
     *
     * @param string $libCritereArticle5 The lib critere article5.
     */
    public function setLibCritereArticle5($libCritereArticle5) {
        $this->libCritereArticle5 = $libCritereArticle5;
        return $this;
    }
}
