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
 * Generic6 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGeneric6CommentaireLibTrait {

    /**
     * Generic6 commentaire lib.
     *
     * @var string
     */
    private $generic6CommentaireLib;

    /**
     * Get the generic6 commentaire lib.
     *
     * @return string Returns the generic6 commentaire lib.
     */
    public function getGeneric6CommentaireLib() {
        return $this->generic6CommentaireLib;
    }

    /**
     * Set the generic6 commentaire lib.
     *
     * @param string $generic6CommentaireLib The generic6 commentaire lib.
     */
    public function setGeneric6CommentaireLib($generic6CommentaireLib) {
        $this->generic6CommentaireLib = $generic6CommentaireLib;
        return $this;
    }
}
