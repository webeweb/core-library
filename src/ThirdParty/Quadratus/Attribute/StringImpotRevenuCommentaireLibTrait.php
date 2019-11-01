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
 * Impot revenu commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringImpotRevenuCommentaireLibTrait {

    /**
     * Impot revenu commentaire lib.
     *
     * @var string
     */
    private $impotRevenuCommentaireLib;

    /**
     * Get the impot revenu commentaire lib.
     *
     * @return string Returns the impot revenu commentaire lib.
     */
    public function getImpotRevenuCommentaireLib() {
        return $this->impotRevenuCommentaireLib;
    }

    /**
     * Set the impot revenu commentaire lib.
     *
     * @param string $impotRevenuCommentaireLib The impot revenu commentaire lib.
     */
    public function setImpotRevenuCommentaireLib($impotRevenuCommentaireLib) {
        $this->impotRevenuCommentaireLib = $impotRevenuCommentaireLib;
        return $this;
    }
}
