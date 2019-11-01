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
 * Ifu commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeIfuCommentaireDateTrait {

    /**
     * Ifu commentaire date.
     *
     * @var DateTime|null
     */
    private $ifuCommentaireDate;

    /**
     * Get the ifu commentaire date.
     *
     * @return DateTime|null Returns the ifu commentaire date.
     */
    public function getIfuCommentaireDate() {
        return $this->ifuCommentaireDate;
    }

    /**
     * Set the ifu commentaire date.
     *
     * @param DateTime|null $ifuCommentaireDate The ifu commentaire date.
     */
    public function setIfuCommentaireDate(DateTime $ifuCommentaireDate = null) {
        $this->ifuCommentaireDate = $ifuCommentaireDate;
        return $this;
    }
}
