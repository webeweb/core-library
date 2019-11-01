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
 * Champs critere article21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle21Trait {

    /**
     * Champs critere article21.
     *
     * @var string
     */
    private $champsCritereArticle21;

    /**
     * Get the champs critere article21.
     *
     * @return string Returns the champs critere article21.
     */
    public function getChampsCritereArticle21() {
        return $this->champsCritereArticle21;
    }

    /**
     * Set the champs critere article21.
     *
     * @param string $champsCritereArticle21 The champs critere article21.
     */
    public function setChampsCritereArticle21($champsCritereArticle21) {
        $this->champsCritereArticle21 = $champsCritereArticle21;
        return $this;
    }
}
