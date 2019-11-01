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
 * Ducs assedic commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDucsAssedicCommentaireLibTrait {

    /**
     * Ducs assedic commentaire lib.
     *
     * @var string
     */
    private $ducsAssedicCommentaireLib;

    /**
     * Get the ducs assedic commentaire lib.
     *
     * @return string Returns the ducs assedic commentaire lib.
     */
    public function getDucsAssedicCommentaireLib() {
        return $this->ducsAssedicCommentaireLib;
    }

    /**
     * Set the ducs assedic commentaire lib.
     *
     * @param string $ducsAssedicCommentaireLib The ducs assedic commentaire lib.
     */
    public function setDucsAssedicCommentaireLib($ducsAssedicCommentaireLib) {
        $this->ducsAssedicCommentaireLib = $ducsAssedicCommentaireLib;
        return $this;
    }
}
