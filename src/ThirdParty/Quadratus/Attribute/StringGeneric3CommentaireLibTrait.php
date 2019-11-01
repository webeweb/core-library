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
 * Generic3 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric3CommentaireLibTrait {

    /**
     * Generic3 commentaire lib.
     *
     * @var string
     */
    private $generic3CommentaireLib;

    /**
     * Get the generic3 commentaire lib.
     *
     * @return string Returns the generic3 commentaire lib.
     */
    public function getGeneric3CommentaireLib() {
        return $this->generic3CommentaireLib;
    }

    /**
     * Set the generic3 commentaire lib.
     *
     * @param string $generic3CommentaireLib The generic3 commentaire lib.
     */
    public function setGeneric3CommentaireLib($generic3CommentaireLib) {
        $this->generic3CommentaireLib = $generic3CommentaireLib;
        return $this;
    }
}
