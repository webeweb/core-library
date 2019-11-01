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
 * Champs critere article2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle2Trait {

    /**
     * Champs critere article2.
     *
     * @var string
     */
    private $champsCritereArticle2;

    /**
     * Get the champs critere article2.
     *
     * @return string Returns the champs critere article2.
     */
    public function getChampsCritereArticle2() {
        return $this->champsCritereArticle2;
    }

    /**
     * Set the champs critere article2.
     *
     * @param string $champsCritereArticle2 The champs critere article2.
     */
    public function setChampsCritereArticle2($champsCritereArticle2) {
        $this->champsCritereArticle2 = $champsCritereArticle2;
        return $this;
    }
}
