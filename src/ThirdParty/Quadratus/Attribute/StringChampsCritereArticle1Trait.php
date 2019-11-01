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
 * Champs critere article1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle1Trait {

    /**
     * Champs critere article1.
     *
     * @var string
     */
    private $champsCritereArticle1;

    /**
     * Get the champs critere article1.
     *
     * @return string Returns the champs critere article1.
     */
    public function getChampsCritereArticle1() {
        return $this->champsCritereArticle1;
    }

    /**
     * Set the champs critere article1.
     *
     * @param string $champsCritereArticle1 The champs critere article1.
     */
    public function setChampsCritereArticle1($champsCritereArticle1) {
        $this->champsCritereArticle1 = $champsCritereArticle1;
        return $this;
    }
}
