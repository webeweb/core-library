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
 * Bilan commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBilanCommentaireLibTrait {

    /**
     * Bilan commentaire lib.
     *
     * @var string
     */
    private $bilanCommentaireLib;

    /**
     * Get the bilan commentaire lib.
     *
     * @return string Returns the bilan commentaire lib.
     */
    public function getBilanCommentaireLib() {
        return $this->bilanCommentaireLib;
    }

    /**
     * Set the bilan commentaire lib.
     *
     * @param string $bilanCommentaireLib The bilan commentaire lib.
     */
    public function setBilanCommentaireLib($bilanCommentaireLib) {
        $this->bilanCommentaireLib = $bilanCommentaireLib;
        return $this;
    }
}
