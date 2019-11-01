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
 * Lib critere article1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle1Trait {

    /**
     * Lib critere article1.
     *
     * @var string
     */
    private $libCritereArticle1;

    /**
     * Get the lib critere article1.
     *
     * @return string Returns the lib critere article1.
     */
    public function getLibCritereArticle1() {
        return $this->libCritereArticle1;
    }

    /**
     * Set the lib critere article1.
     *
     * @param string $libCritereArticle1 The lib critere article1.
     */
    public function setLibCritereArticle1($libCritereArticle1) {
        $this->libCritereArticle1 = $libCritereArticle1;
        return $this;
    }
}
