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
 * Generic7 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric7CommentaireLibTrait {

    /**
     * Generic7 commentaire lib.
     *
     * @var string
     */
    private $generic7CommentaireLib;

    /**
     * Get the generic7 commentaire lib.
     *
     * @return string Returns the generic7 commentaire lib.
     */
    public function getGeneric7CommentaireLib() {
        return $this->generic7CommentaireLib;
    }

    /**
     * Set the generic7 commentaire lib.
     *
     * @param string $generic7CommentaireLib The generic7 commentaire lib.
     */
    public function setGeneric7CommentaireLib($generic7CommentaireLib) {
        $this->generic7CommentaireLib = $generic7CommentaireLib;
        return $this;
    }
}
