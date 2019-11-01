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
 * Generic10 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric10CommentaireLibTrait {

    /**
     * Generic10 commentaire lib.
     *
     * @var string
     */
    private $generic10CommentaireLib;

    /**
     * Get the generic10 commentaire lib.
     *
     * @return string Returns the generic10 commentaire lib.
     */
    public function getGeneric10CommentaireLib() {
        return $this->generic10CommentaireLib;
    }

    /**
     * Set the generic10 commentaire lib.
     *
     * @param string $generic10CommentaireLib The generic10 commentaire lib.
     */
    public function setGeneric10CommentaireLib($generic10CommentaireLib) {
        $this->generic10CommentaireLib = $generic10CommentaireLib;
        return $this;
    }
}
