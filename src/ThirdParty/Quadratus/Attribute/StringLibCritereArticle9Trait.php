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
 * Lib critere article9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle9Trait {

    /**
     * Lib critere article9.
     *
     * @var string
     */
    private $libCritereArticle9;

    /**
     * Get the lib critere article9.
     *
     * @return string Returns the lib critere article9.
     */
    public function getLibCritereArticle9() {
        return $this->libCritereArticle9;
    }

    /**
     * Set the lib critere article9.
     *
     * @param string $libCritereArticle9 The lib critere article9.
     */
    public function setLibCritereArticle9($libCritereArticle9) {
        $this->libCritereArticle9 = $libCritereArticle9;
        return $this;
    }
}
