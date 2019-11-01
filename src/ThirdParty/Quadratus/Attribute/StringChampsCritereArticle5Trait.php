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
 * Champs critere article5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle5Trait {

    /**
     * Champs critere article5.
     *
     * @var string
     */
    private $champsCritereArticle5;

    /**
     * Get the champs critere article5.
     *
     * @return string Returns the champs critere article5.
     */
    public function getChampsCritereArticle5() {
        return $this->champsCritereArticle5;
    }

    /**
     * Set the champs critere article5.
     *
     * @param string $champsCritereArticle5 The champs critere article5.
     */
    public function setChampsCritereArticle5($champsCritereArticle5) {
        $this->champsCritereArticle5 = $champsCritereArticle5;
        return $this;
    }
}
