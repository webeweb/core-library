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
 * Type commentaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeCommentaireTrait {

    /**
     * Type commentaire.
     *
     * @var bool
     */
    private $typeCommentaire;

    /**
     * Get the type commentaire.
     *
     * @return bool Returns the type commentaire.
     */
    public function getTypeCommentaire() {
        return $this->typeCommentaire;
    }

    /**
     * Set the type commentaire.
     *
     * @param bool $typeCommentaire The type commentaire.
     */
    public function setTypeCommentaire($typeCommentaire) {
        $this->typeCommentaire = $typeCommentaire;
        return $this;
    }
}
