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
 * Champs critere article8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle8Trait {

    /**
     * Champs critere article8.
     *
     * @var string
     */
    private $champsCritereArticle8;

    /**
     * Get the champs critere article8.
     *
     * @return string Returns the champs critere article8.
     */
    public function getChampsCritereArticle8() {
        return $this->champsCritereArticle8;
    }

    /**
     * Set the champs critere article8.
     *
     * @param string $champsCritereArticle8 The champs critere article8.
     */
    public function setChampsCritereArticle8($champsCritereArticle8) {
        $this->champsCritereArticle8 = $champsCritereArticle8;
        return $this;
    }
}
