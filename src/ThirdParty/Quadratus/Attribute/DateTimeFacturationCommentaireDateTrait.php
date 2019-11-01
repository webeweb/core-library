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
 * Facturation commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFacturationCommentaireDateTrait {

    /**
     * Facturation commentaire date.
     *
     * @var DateTime|null
     */
    private $facturationCommentaireDate;

    /**
     * Get the facturation commentaire date.
     *
     * @return DateTime|null Returns the facturation commentaire date.
     */
    public function getFacturationCommentaireDate() {
        return $this->facturationCommentaireDate;
    }

    /**
     * Set the facturation commentaire date.
     *
     * @param DateTime|null $facturationCommentaireDate The facturation commentaire date.
     */
    public function setFacturationCommentaireDate(DateTime $facturationCommentaireDate = null) {
        $this->facturationCommentaireDate = $facturationCommentaireDate;
        return $this;
    }
}
