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
 * Champs critere article26 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle26Trait {

    /**
     * Champs critere article26.
     *
     * @var string
     */
    private $champsCritereArticle26;

    /**
     * Get the champs critere article26.
     *
     * @return string Returns the champs critere article26.
     */
    public function getChampsCritereArticle26() {
        return $this->champsCritereArticle26;
    }

    /**
     * Set the champs critere article26.
     *
     * @param string $champsCritereArticle26 The champs critere article26.
     */
    public function setChampsCritereArticle26($champsCritereArticle26) {
        $this->champsCritereArticle26 = $champsCritereArticle26;
        return $this;
    }
}
