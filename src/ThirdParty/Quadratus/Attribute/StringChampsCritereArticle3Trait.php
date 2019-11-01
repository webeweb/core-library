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
 * Champs critere article3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle3Trait {

    /**
     * Champs critere article3.
     *
     * @var string
     */
    private $champsCritereArticle3;

    /**
     * Get the champs critere article3.
     *
     * @return string Returns the champs critere article3.
     */
    public function getChampsCritereArticle3() {
        return $this->champsCritereArticle3;
    }

    /**
     * Set the champs critere article3.
     *
     * @param string $champsCritereArticle3 The champs critere article3.
     */
    public function setChampsCritereArticle3($champsCritereArticle3) {
        $this->champsCritereArticle3 = $champsCritereArticle3;
        return $this;
    }
}
