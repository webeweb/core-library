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
 * Champs critere article210 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle210Trait {

    /**
     * Champs critere article210.
     *
     * @var string
     */
    private $champsCritereArticle210;

    /**
     * Get the champs critere article210.
     *
     * @return string Returns the champs critere article210.
     */
    public function getChampsCritereArticle210() {
        return $this->champsCritereArticle210;
    }

    /**
     * Set the champs critere article210.
     *
     * @param string $champsCritereArticle210 The champs critere article210.
     */
    public function setChampsCritereArticle210($champsCritereArticle210) {
        $this->champsCritereArticle210 = $champsCritereArticle210;
        return $this;
    }
}
