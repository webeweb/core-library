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
 * Iss commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIssCommentaireLibTrait {

    /**
     * Iss commentaire lib.
     *
     * @var string
     */
    private $issCommentaireLib;

    /**
     * Get the iss commentaire lib.
     *
     * @return string Returns the iss commentaire lib.
     */
    public function getIssCommentaireLib() {
        return $this->issCommentaireLib;
    }

    /**
     * Set the iss commentaire lib.
     *
     * @param string $issCommentaireLib The iss commentaire lib.
     */
    public function setIssCommentaireLib($issCommentaireLib) {
        $this->issCommentaireLib = $issCommentaireLib;
        return $this;
    }
}
