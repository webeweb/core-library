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
 * Ifu commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIfuCommentaireLibTrait {

    /**
     * Ifu commentaire lib.
     *
     * @var string
     */
    private $ifuCommentaireLib;

    /**
     * Get the ifu commentaire lib.
     *
     * @return string Returns the ifu commentaire lib.
     */
    public function getIfuCommentaireLib() {
        return $this->ifuCommentaireLib;
    }

    /**
     * Set the ifu commentaire lib.
     *
     * @param string $ifuCommentaireLib The ifu commentaire lib.
     */
    public function setIfuCommentaireLib($ifuCommentaireLib) {
        $this->ifuCommentaireLib = $ifuCommentaireLib;
        return $this;
    }
}
