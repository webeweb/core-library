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
 * Champs critere article9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle9Trait {

    /**
     * Champs critere article9.
     *
     * @var string
     */
    private $champsCritereArticle9;

    /**
     * Get the champs critere article9.
     *
     * @return string Returns the champs critere article9.
     */
    public function getChampsCritereArticle9() {
        return $this->champsCritereArticle9;
    }

    /**
     * Set the champs critere article9.
     *
     * @param string $champsCritereArticle9 The champs critere article9.
     */
    public function setChampsCritereArticle9($champsCritereArticle9) {
        $this->champsCritereArticle9 = $champsCritereArticle9;
        return $this;
    }
}
