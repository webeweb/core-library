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
 * Generic4 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric4CommentaireLibTrait {

    /**
     * Generic4 commentaire lib.
     *
     * @var string
     */
    private $generic4CommentaireLib;

    /**
     * Get the generic4 commentaire lib.
     *
     * @return string Returns the generic4 commentaire lib.
     */
    public function getGeneric4CommentaireLib() {
        return $this->generic4CommentaireLib;
    }

    /**
     * Set the generic4 commentaire lib.
     *
     * @param string $generic4CommentaireLib The generic4 commentaire lib.
     */
    public function setGeneric4CommentaireLib($generic4CommentaireLib) {
        $this->generic4CommentaireLib = $generic4CommentaireLib;
        return $this;
    }
}
