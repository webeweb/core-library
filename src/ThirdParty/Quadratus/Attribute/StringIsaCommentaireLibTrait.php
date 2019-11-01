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
 * Isa commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIsaCommentaireLibTrait {

    /**
     * Isa commentaire lib.
     *
     * @var string
     */
    private $isaCommentaireLib;

    /**
     * Get the isa commentaire lib.
     *
     * @return string Returns the isa commentaire lib.
     */
    public function getIsaCommentaireLib() {
        return $this->isaCommentaireLib;
    }

    /**
     * Set the isa commentaire lib.
     *
     * @param string $isaCommentaireLib The isa commentaire lib.
     */
    public function setIsaCommentaireLib($isaCommentaireLib) {
        $this->isaCommentaireLib = $isaCommentaireLib;
        return $this;
    }
}
