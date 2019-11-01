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
 * Ducs urssaf commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDucsUrssafCommentaireLibTrait {

    /**
     * Ducs urssaf commentaire lib.
     *
     * @var string
     */
    private $ducsUrssafCommentaireLib;

    /**
     * Get the ducs urssaf commentaire lib.
     *
     * @return string Returns the ducs urssaf commentaire lib.
     */
    public function getDucsUrssafCommentaireLib() {
        return $this->ducsUrssafCommentaireLib;
    }

    /**
     * Set the ducs urssaf commentaire lib.
     *
     * @param string $ducsUrssafCommentaireLib The ducs urssaf commentaire lib.
     */
    public function setDucsUrssafCommentaireLib($ducsUrssafCommentaireLib) {
        $this->ducsUrssafCommentaireLib = $ducsUrssafCommentaireLib;
        return $this;
    }
}
