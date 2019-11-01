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
 * Generic2 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric2CommentaireLibTrait {

    /**
     * Generic2 commentaire lib.
     *
     * @var string
     */
    private $generic2CommentaireLib;

    /**
     * Get the generic2 commentaire lib.
     *
     * @return string Returns the generic2 commentaire lib.
     */
    public function getGeneric2CommentaireLib() {
        return $this->generic2CommentaireLib;
    }

    /**
     * Set the generic2 commentaire lib.
     *
     * @param string $generic2CommentaireLib The generic2 commentaire lib.
     */
    public function setGeneric2CommentaireLib($generic2CommentaireLib) {
        $this->generic2CommentaireLib = $generic2CommentaireLib;
        return $this;
    }
}
