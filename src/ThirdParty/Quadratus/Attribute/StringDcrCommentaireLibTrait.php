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
 * Dcr commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDcrCommentaireLibTrait {

    /**
     * Dcr commentaire lib.
     *
     * @var string
     */
    private $dcrCommentaireLib;

    /**
     * Get the dcr commentaire lib.
     *
     * @return string Returns the dcr commentaire lib.
     */
    public function getDcrCommentaireLib() {
        return $this->dcrCommentaireLib;
    }

    /**
     * Set the dcr commentaire lib.
     *
     * @param string $dcrCommentaireLib The dcr commentaire lib.
     */
    public function setDcrCommentaireLib($dcrCommentaireLib) {
        $this->dcrCommentaireLib = $dcrCommentaireLib;
        return $this;
    }
}
