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
 * Champs critere article7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle7Trait {

    /**
     * Champs critere article7.
     *
     * @var string
     */
    private $champsCritereArticle7;

    /**
     * Get the champs critere article7.
     *
     * @return string Returns the champs critere article7.
     */
    public function getChampsCritereArticle7() {
        return $this->champsCritereArticle7;
    }

    /**
     * Set the champs critere article7.
     *
     * @param string $champsCritereArticle7 The champs critere article7.
     */
    public function setChampsCritereArticle7($champsCritereArticle7) {
        $this->champsCritereArticle7 = $champsCritereArticle7;
        return $this;
    }
}
