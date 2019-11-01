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
 * Champs critere article24 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle24Trait {

    /**
     * Champs critere article24.
     *
     * @var string
     */
    private $champsCritereArticle24;

    /**
     * Get the champs critere article24.
     *
     * @return string Returns the champs critere article24.
     */
    public function getChampsCritereArticle24() {
        return $this->champsCritereArticle24;
    }

    /**
     * Set the champs critere article24.
     *
     * @param string $champsCritereArticle24 The champs critere article24.
     */
    public function setChampsCritereArticle24($champsCritereArticle24) {
        $this->champsCritereArticle24 = $champsCritereArticle24;
        return $this;
    }
}
