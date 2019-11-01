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
 * Generic1 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric1CommentaireLibTrait {

    /**
     * Generic1 commentaire lib.
     *
     * @var string
     */
    private $generic1CommentaireLib;

    /**
     * Get the generic1 commentaire lib.
     *
     * @return string Returns the generic1 commentaire lib.
     */
    public function getGeneric1CommentaireLib() {
        return $this->generic1CommentaireLib;
    }

    /**
     * Set the generic1 commentaire lib.
     *
     * @param string $generic1CommentaireLib The generic1 commentaire lib.
     */
    public function setGeneric1CommentaireLib($generic1CommentaireLib) {
        $this->generic1CommentaireLib = $generic1CommentaireLib;
        return $this;
    }
}
