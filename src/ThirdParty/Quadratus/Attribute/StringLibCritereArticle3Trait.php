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
 * Lib critere article3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle3Trait {

    /**
     * Lib critere article3.
     *
     * @var string
     */
    private $libCritereArticle3;

    /**
     * Get the lib critere article3.
     *
     * @return string Returns the lib critere article3.
     */
    public function getLibCritereArticle3() {
        return $this->libCritereArticle3;
    }

    /**
     * Set the lib critere article3.
     *
     * @param string $libCritereArticle3 The lib critere article3.
     */
    public function setLibCritereArticle3($libCritereArticle3) {
        $this->libCritereArticle3 = $libCritereArticle3;
        return $this;
    }
}
