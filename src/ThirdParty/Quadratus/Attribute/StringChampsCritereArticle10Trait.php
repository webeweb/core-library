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
 * Champs critere article10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle10Trait {

    /**
     * Champs critere article10.
     *
     * @var string
     */
    private $champsCritereArticle10;

    /**
     * Get the champs critere article10.
     *
     * @return string Returns the champs critere article10.
     */
    public function getChampsCritereArticle10() {
        return $this->champsCritereArticle10;
    }

    /**
     * Set the champs critere article10.
     *
     * @param string $champsCritereArticle10 The champs critere article10.
     */
    public function setChampsCritereArticle10($champsCritereArticle10) {
        $this->champsCritereArticle10 = $champsCritereArticle10;
        return $this;
    }
}
