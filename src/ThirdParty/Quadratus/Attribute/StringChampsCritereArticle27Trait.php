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
 * Champs critere article27 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle27Trait {

    /**
     * Champs critere article27.
     *
     * @var string
     */
    private $champsCritereArticle27;

    /**
     * Get the champs critere article27.
     *
     * @return string Returns the champs critere article27.
     */
    public function getChampsCritereArticle27() {
        return $this->champsCritereArticle27;
    }

    /**
     * Set the champs critere article27.
     *
     * @param string $champsCritereArticle27 The champs critere article27.
     */
    public function setChampsCritereArticle27($champsCritereArticle27) {
        $this->champsCritereArticle27 = $champsCritereArticle27;
        return $this;
    }
}
