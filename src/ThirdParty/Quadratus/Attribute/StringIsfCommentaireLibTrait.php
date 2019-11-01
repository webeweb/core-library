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
 * Isf commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIsfCommentaireLibTrait {

    /**
     * Isf commentaire lib.
     *
     * @var string
     */
    private $isfCommentaireLib;

    /**
     * Get the isf commentaire lib.
     *
     * @return string Returns the isf commentaire lib.
     */
    public function getIsfCommentaireLib() {
        return $this->isfCommentaireLib;
    }

    /**
     * Set the isf commentaire lib.
     *
     * @param string $isfCommentaireLib The isf commentaire lib.
     */
    public function setIsfCommentaireLib($isfCommentaireLib) {
        $this->isfCommentaireLib = $isfCommentaireLib;
        return $this;
    }
}
