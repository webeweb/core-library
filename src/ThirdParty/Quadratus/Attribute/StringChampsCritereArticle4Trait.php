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
 * Champs critere article4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle4Trait {

    /**
     * Champs critere article4.
     *
     * @var string
     */
    private $champsCritereArticle4;

    /**
     * Get the champs critere article4.
     *
     * @return string Returns the champs critere article4.
     */
    public function getChampsCritereArticle4() {
        return $this->champsCritereArticle4;
    }

    /**
     * Set the champs critere article4.
     *
     * @param string $champsCritereArticle4 The champs critere article4.
     */
    public function setChampsCritereArticle4($champsCritereArticle4) {
        $this->champsCritereArticle4 = $champsCritereArticle4;
        return $this;
    }
}
