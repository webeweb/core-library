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

use DateTime;

/**
 * Tss commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTssCommentaireDateTrait {

    /**
     * Tss commentaire date.
     *
     * @var DateTime|null
     */
    private $tssCommentaireDate;

    /**
     * Get the tss commentaire date.
     *
     * @return DateTime|null Returns the tss commentaire date.
     */
    public function getTssCommentaireDate() {
        return $this->tssCommentaireDate;
    }

    /**
     * Set the tss commentaire date.
     *
     * @param DateTime|null $tssCommentaireDate The tss commentaire date.
     */
    public function setTssCommentaireDate(DateTime $tssCommentaireDate = null) {
        $this->tssCommentaireDate = $tssCommentaireDate;
        return $this;
    }
}
