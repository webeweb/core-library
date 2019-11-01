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
 * Tp commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTpCommentaireLibTrait {

    /**
     * Tp commentaire lib.
     *
     * @var string
     */
    private $tpCommentaireLib;

    /**
     * Get the tp commentaire lib.
     *
     * @return string Returns the tp commentaire lib.
     */
    public function getTpCommentaireLib() {
        return $this->tpCommentaireLib;
    }

    /**
     * Set the tp commentaire lib.
     *
     * @param string $tpCommentaireLib The tp commentaire lib.
     */
    public function setTpCommentaireLib($tpCommentaireLib) {
        $this->tpCommentaireLib = $tpCommentaireLib;
        return $this;
    }
}
