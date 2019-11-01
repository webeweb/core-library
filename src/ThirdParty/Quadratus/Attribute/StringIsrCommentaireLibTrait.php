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
 * Isr commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIsrCommentaireLibTrait {

    /**
     * Isr commentaire lib.
     *
     * @var string
     */
    private $isrCommentaireLib;

    /**
     * Get the isr commentaire lib.
     *
     * @return string Returns the isr commentaire lib.
     */
    public function getIsrCommentaireLib() {
        return $this->isrCommentaireLib;
    }

    /**
     * Set the isr commentaire lib.
     *
     * @param string $isrCommentaireLib The isr commentaire lib.
     */
    public function setIsrCommentaireLib($isrCommentaireLib) {
        $this->isrCommentaireLib = $isrCommentaireLib;
        return $this;
    }
}
