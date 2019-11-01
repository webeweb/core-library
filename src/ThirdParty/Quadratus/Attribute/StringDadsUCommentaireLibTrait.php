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
 * Dads u commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDadsUCommentaireLibTrait {

    /**
     * Dads u commentaire lib.
     *
     * @var string
     */
    private $dadsUCommentaireLib;

    /**
     * Get the dads u commentaire lib.
     *
     * @return string Returns the dads u commentaire lib.
     */
    public function getDadsUCommentaireLib() {
        return $this->dadsUCommentaireLib;
    }

    /**
     * Set the dads u commentaire lib.
     *
     * @param string $dadsUCommentaireLib The dads u commentaire lib.
     */
    public function setDadsUCommentaireLib($dadsUCommentaireLib) {
        $this->dadsUCommentaireLib = $dadsUCommentaireLib;
        return $this;
    }
}
