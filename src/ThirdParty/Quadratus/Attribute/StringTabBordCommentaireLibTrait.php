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
 * Tab bord commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTabBordCommentaireLibTrait {

    /**
     * Tab bord commentaire lib.
     *
     * @var string
     */
    private $tabBordCommentaireLib;

    /**
     * Get the tab bord commentaire lib.
     *
     * @return string Returns the tab bord commentaire lib.
     */
    public function getTabBordCommentaireLib() {
        return $this->tabBordCommentaireLib;
    }

    /**
     * Set the tab bord commentaire lib.
     *
     * @param string $tabBordCommentaireLib The tab bord commentaire lib.
     */
    public function setTabBordCommentaireLib($tabBordCommentaireLib) {
        $this->tabBordCommentaireLib = $tabBordCommentaireLib;
        return $this;
    }
}
