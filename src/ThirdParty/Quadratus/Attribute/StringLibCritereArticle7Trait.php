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
 * Lib critere article7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle7Trait {

    /**
     * Lib critere article7.
     *
     * @var string
     */
    private $libCritereArticle7;

    /**
     * Get the lib critere article7.
     *
     * @return string Returns the lib critere article7.
     */
    public function getLibCritereArticle7() {
        return $this->libCritereArticle7;
    }

    /**
     * Set the lib critere article7.
     *
     * @param string $libCritereArticle7 The lib critere article7.
     */
    public function setLibCritereArticle7($libCritereArticle7) {
        $this->libCritereArticle7 = $libCritereArticle7;
        return $this;
    }
}
