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
 * Situation commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSituationCommentaireLibTrait {

    /**
     * Situation commentaire lib.
     *
     * @var string
     */
    private $situationCommentaireLib;

    /**
     * Get the situation commentaire lib.
     *
     * @return string Returns the situation commentaire lib.
     */
    public function getSituationCommentaireLib() {
        return $this->situationCommentaireLib;
    }

    /**
     * Set the situation commentaire lib.
     *
     * @param string $situationCommentaireLib The situation commentaire lib.
     */
    public function setSituationCommentaireLib($situationCommentaireLib) {
        $this->situationCommentaireLib = $situationCommentaireLib;
        return $this;
    }
}
