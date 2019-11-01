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
 * Tsa commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTsaCommentaireLibTrait {

    /**
     * Tsa commentaire lib.
     *
     * @var string
     */
    private $tsaCommentaireLib;

    /**
     * Get the tsa commentaire lib.
     *
     * @return string Returns the tsa commentaire lib.
     */
    public function getTsaCommentaireLib() {
        return $this->tsaCommentaireLib;
    }

    /**
     * Set the tsa commentaire lib.
     *
     * @param string $tsaCommentaireLib The tsa commentaire lib.
     */
    public function setTsaCommentaireLib($tsaCommentaireLib) {
        $this->tsaCommentaireLib = $tsaCommentaireLib;
        return $this;
    }
}
