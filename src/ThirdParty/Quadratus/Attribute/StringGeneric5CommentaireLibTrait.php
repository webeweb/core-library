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
 * Generic5 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric5CommentaireLibTrait {

    /**
     * Generic5 commentaire lib.
     *
     * @var string
     */
    private $generic5CommentaireLib;

    /**
     * Get the generic5 commentaire lib.
     *
     * @return string Returns the generic5 commentaire lib.
     */
    public function getGeneric5CommentaireLib() {
        return $this->generic5CommentaireLib;
    }

    /**
     * Set the generic5 commentaire lib.
     *
     * @param string $generic5CommentaireLib The generic5 commentaire lib.
     */
    public function setGeneric5CommentaireLib($generic5CommentaireLib) {
        $this->generic5CommentaireLib = $generic5CommentaireLib;
        return $this;
    }
}
