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
 * Champs critere article29 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle29Trait {

    /**
     * Champs critere article29.
     *
     * @var string
     */
    private $champsCritereArticle29;

    /**
     * Get the champs critere article29.
     *
     * @return string Returns the champs critere article29.
     */
    public function getChampsCritereArticle29() {
        return $this->champsCritereArticle29;
    }

    /**
     * Set the champs critere article29.
     *
     * @param string $champsCritereArticle29 The champs critere article29.
     */
    public function setChampsCritereArticle29($champsCritereArticle29) {
        $this->champsCritereArticle29 = $champsCritereArticle29;
        return $this;
    }
}
