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
 * Dsi commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDsiCommentaireLibTrait {

    /**
     * Dsi commentaire lib.
     *
     * @var string
     */
    private $dsiCommentaireLib;

    /**
     * Get the dsi commentaire lib.
     *
     * @return string Returns the dsi commentaire lib.
     */
    public function getDsiCommentaireLib() {
        return $this->dsiCommentaireLib;
    }

    /**
     * Set the dsi commentaire lib.
     *
     * @param string $dsiCommentaireLib The dsi commentaire lib.
     */
    public function setDsiCommentaireLib($dsiCommentaireLib) {
        $this->dsiCommentaireLib = $dsiCommentaireLib;
        return $this;
    }
}
