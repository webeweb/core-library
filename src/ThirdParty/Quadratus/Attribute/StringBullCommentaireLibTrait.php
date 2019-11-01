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
 * Bull commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBullCommentaireLibTrait {

    /**
     * Bull commentaire lib.
     *
     * @var string
     */
    private $bullCommentaireLib;

    /**
     * Get the bull commentaire lib.
     *
     * @return string Returns the bull commentaire lib.
     */
    public function getBullCommentaireLib() {
        return $this->bullCommentaireLib;
    }

    /**
     * Set the bull commentaire lib.
     *
     * @param string $bullCommentaireLib The bull commentaire lib.
     */
    public function setBullCommentaireLib($bullCommentaireLib) {
        $this->bullCommentaireLib = $bullCommentaireLib;
        return $this;
    }
}
