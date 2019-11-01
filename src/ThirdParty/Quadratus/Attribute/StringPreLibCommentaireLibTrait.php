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
 * Pre lib commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPreLibCommentaireLibTrait {

    /**
     * Pre lib commentaire lib.
     *
     * @var string
     */
    private $preLibCommentaireLib;

    /**
     * Get the pre lib commentaire lib.
     *
     * @return string Returns the pre lib commentaire lib.
     */
    public function getPreLibCommentaireLib() {
        return $this->preLibCommentaireLib;
    }

    /**
     * Set the pre lib commentaire lib.
     *
     * @param string $preLibCommentaireLib The pre lib commentaire lib.
     */
    public function setPreLibCommentaireLib($preLibCommentaireLib) {
        $this->preLibCommentaireLib = $preLibCommentaireLib;
        return $this;
    }
}
