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
 * Tss commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTssCommentaireLibTrait {

    /**
     * Tss commentaire lib.
     *
     * @var string
     */
    private $tssCommentaireLib;

    /**
     * Get the tss commentaire lib.
     *
     * @return string Returns the tss commentaire lib.
     */
    public function getTssCommentaireLib() {
        return $this->tssCommentaireLib;
    }

    /**
     * Set the tss commentaire lib.
     *
     * @param string $tssCommentaireLib The tss commentaire lib.
     */
    public function setTssCommentaireLib($tssCommentaireLib) {
        $this->tssCommentaireLib = $tssCommentaireLib;
        return $this;
    }
}
