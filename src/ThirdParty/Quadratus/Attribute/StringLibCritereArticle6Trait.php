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
 * Lib critere article6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereArticle6Trait {

    /**
     * Lib critere article6.
     *
     * @var string
     */
    private $libCritereArticle6;

    /**
     * Get the lib critere article6.
     *
     * @return string Returns the lib critere article6.
     */
    public function getLibCritereArticle6() {
        return $this->libCritereArticle6;
    }

    /**
     * Set the lib critere article6.
     *
     * @param string $libCritereArticle6 The lib critere article6.
     */
    public function setLibCritereArticle6($libCritereArticle6) {
        $this->libCritereArticle6 = $libCritereArticle6;
        return $this;
    }
}
