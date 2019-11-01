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
 * Champs critere article22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle22Trait {

    /**
     * Champs critere article22.
     *
     * @var string
     */
    private $champsCritereArticle22;

    /**
     * Get the champs critere article22.
     *
     * @return string Returns the champs critere article22.
     */
    public function getChampsCritereArticle22() {
        return $this->champsCritereArticle22;
    }

    /**
     * Set the champs critere article22.
     *
     * @param string $champsCritereArticle22 The champs critere article22.
     */
    public function setChampsCritereArticle22($champsCritereArticle22) {
        $this->champsCritereArticle22 = $champsCritereArticle22;
        return $this;
    }
}
