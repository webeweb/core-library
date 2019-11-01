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
 * Tva commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCommentaireLibTrait {

    /**
     * Tva commentaire lib.
     *
     * @var string
     */
    private $tvaCommentaireLib;

    /**
     * Get the tva commentaire lib.
     *
     * @return string Returns the tva commentaire lib.
     */
    public function getTvaCommentaireLib() {
        return $this->tvaCommentaireLib;
    }

    /**
     * Set the tva commentaire lib.
     *
     * @param string $tvaCommentaireLib The tva commentaire lib.
     */
    public function setTvaCommentaireLib($tvaCommentaireLib) {
        $this->tvaCommentaireLib = $tvaCommentaireLib;
        return $this;
    }
}
