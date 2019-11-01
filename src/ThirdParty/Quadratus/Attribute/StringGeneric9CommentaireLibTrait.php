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
 * Generic9 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric9CommentaireLibTrait {

    /**
     * Generic9 commentaire lib.
     *
     * @var string
     */
    private $generic9CommentaireLib;

    /**
     * Get the generic9 commentaire lib.
     *
     * @return string Returns the generic9 commentaire lib.
     */
    public function getGeneric9CommentaireLib() {
        return $this->generic9CommentaireLib;
    }

    /**
     * Set the generic9 commentaire lib.
     *
     * @param string $generic9CommentaireLib The generic9 commentaire lib.
     */
    public function setGeneric9CommentaireLib($generic9CommentaireLib) {
        $this->generic9CommentaireLib = $generic9CommentaireLib;
        return $this;
    }
}
