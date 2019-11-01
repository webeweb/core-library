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
 * Champs critere article23 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle23Trait {

    /**
     * Champs critere article23.
     *
     * @var string
     */
    private $champsCritereArticle23;

    /**
     * Get the champs critere article23.
     *
     * @return string Returns the champs critere article23.
     */
    public function getChampsCritereArticle23() {
        return $this->champsCritereArticle23;
    }

    /**
     * Set the champs critere article23.
     *
     * @param string $champsCritereArticle23 The champs critere article23.
     */
    public function setChampsCritereArticle23($champsCritereArticle23) {
        $this->champsCritereArticle23 = $champsCritereArticle23;
        return $this;
    }
}
