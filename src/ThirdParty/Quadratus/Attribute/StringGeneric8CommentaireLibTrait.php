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
 * Generic8 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric8CommentaireLibTrait {

    /**
     * Generic8 commentaire lib.
     *
     * @var string
     */
    private $generic8CommentaireLib;

    /**
     * Get the generic8 commentaire lib.
     *
     * @return string Returns the generic8 commentaire lib.
     */
    public function getGeneric8CommentaireLib() {
        return $this->generic8CommentaireLib;
    }

    /**
     * Set the generic8 commentaire lib.
     *
     * @param string $generic8CommentaireLib The generic8 commentaire lib.
     */
    public function setGeneric8CommentaireLib($generic8CommentaireLib) {
        $this->generic8CommentaireLib = $generic8CommentaireLib;
        return $this;
    }
}
