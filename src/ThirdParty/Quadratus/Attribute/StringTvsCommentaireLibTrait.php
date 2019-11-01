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
 * Tvs commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvsCommentaireLibTrait {

    /**
     * Tvs commentaire lib.
     *
     * @var string
     */
    private $tvsCommentaireLib;

    /**
     * Get the tvs commentaire lib.
     *
     * @return string Returns the tvs commentaire lib.
     */
    public function getTvsCommentaireLib() {
        return $this->tvsCommentaireLib;
    }

    /**
     * Set the tvs commentaire lib.
     *
     * @param string $tvsCommentaireLib The tvs commentaire lib.
     */
    public function setTvsCommentaireLib($tvsCommentaireLib) {
        $this->tvsCommentaireLib = $tvsCommentaireLib;
        return $this;
    }
}
