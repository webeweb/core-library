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
 * Champs critere article25 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle25Trait {

    /**
     * Champs critere article25.
     *
     * @var string
     */
    private $champsCritereArticle25;

    /**
     * Get the champs critere article25.
     *
     * @return string Returns the champs critere article25.
     */
    public function getChampsCritereArticle25() {
        return $this->champsCritereArticle25;
    }

    /**
     * Set the champs critere article25.
     *
     * @param string $champsCritereArticle25 The champs critere article25.
     */
    public function setChampsCritereArticle25($champsCritereArticle25) {
        $this->champsCritereArticle25 = $champsCritereArticle25;
        return $this;
    }
}
