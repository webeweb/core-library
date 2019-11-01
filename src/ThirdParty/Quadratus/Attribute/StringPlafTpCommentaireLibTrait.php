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
 * Plaf tp commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPlafTpCommentaireLibTrait {

    /**
     * Plaf tp commentaire lib.
     *
     * @var string
     */
    private $plafTpCommentaireLib;

    /**
     * Get the plaf tp commentaire lib.
     *
     * @return string Returns the plaf tp commentaire lib.
     */
    public function getPlafTpCommentaireLib() {
        return $this->plafTpCommentaireLib;
    }

    /**
     * Set the plaf tp commentaire lib.
     *
     * @param string $plafTpCommentaireLib The plaf tp commentaire lib.
     */
    public function setPlafTpCommentaireLib($plafTpCommentaireLib) {
        $this->plafTpCommentaireLib = $plafTpCommentaireLib;
        return $this;
    }
}
