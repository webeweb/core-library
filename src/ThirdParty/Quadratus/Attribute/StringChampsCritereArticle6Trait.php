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
 * Champs critere article6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereArticle6Trait {

    /**
     * Champs critere article6.
     *
     * @var string
     */
    private $champsCritereArticle6;

    /**
     * Get the champs critere article6.
     *
     * @return string Returns the champs critere article6.
     */
    public function getChampsCritereArticle6() {
        return $this->champsCritereArticle6;
    }

    /**
     * Set the champs critere article6.
     *
     * @param string $champsCritereArticle6 The champs critere article6.
     */
    public function setChampsCritereArticle6($champsCritereArticle6) {
        $this->champsCritereArticle6 = $champsCritereArticle6;
        return $this;
    }
}
