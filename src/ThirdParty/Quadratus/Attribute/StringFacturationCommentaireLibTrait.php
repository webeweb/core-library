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
 * Facturation commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFacturationCommentaireLibTrait {

    /**
     * Facturation commentaire lib.
     *
     * @var string
     */
    private $facturationCommentaireLib;

    /**
     * Get the facturation commentaire lib.
     *
     * @return string Returns the facturation commentaire lib.
     */
    public function getFacturationCommentaireLib() {
        return $this->facturationCommentaireLib;
    }

    /**
     * Set the facturation commentaire lib.
     *
     * @param string $facturationCommentaireLib The facturation commentaire lib.
     */
    public function setFacturationCommentaireLib($facturationCommentaireLib) {
        $this->facturationCommentaireLib = $facturationCommentaireLib;
        return $this;
    }
}
