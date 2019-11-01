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
 * Champs critere article28 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle28Trait {

    /**
     * Champs critere article28.
     *
     * @var string
     */
    private $champsCritereArticle28;

    /**
     * Get the champs critere article28.
     *
     * @return string Returns the champs critere article28.
     */
    public function getChampsCritereArticle28() {
        return $this->champsCritereArticle28;
    }

    /**
     * Set the champs critere article28.
     *
     * @param string $champsCritereArticle28 The champs critere article28.
     */
    public function setChampsCritereArticle28($champsCritereArticle28) {
        $this->champsCritereArticle28 = $champsCritereArticle28;
        return $this;
    }
}
