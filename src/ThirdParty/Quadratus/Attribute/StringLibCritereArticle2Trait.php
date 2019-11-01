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
 * Lib critere article2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle2Trait {

    /**
     * Lib critere article2.
     *
     * @var string
     */
    private $libCritereArticle2;

    /**
     * Get the lib critere article2.
     *
     * @return string Returns the lib critere article2.
     */
    public function getLibCritereArticle2() {
        return $this->libCritereArticle2;
    }

    /**
     * Set the lib critere article2.
     *
     * @param string $libCritereArticle2 The lib critere article2.
     */
    public function setLibCritereArticle2($libCritereArticle2) {
        $this->libCritereArticle2 = $libCritereArticle2;
        return $this;
    }
}
