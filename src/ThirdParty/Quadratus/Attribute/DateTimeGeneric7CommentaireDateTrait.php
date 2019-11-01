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
 * Generic7 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric7CommentaireDateTrait {

    /**
     * Generic7 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic7CommentaireDate;

    /**
     * Get the generic7 commentaire date.
     *
     * @return DateTime|null Returns the generic7 commentaire date.
     */
    public function getGeneric7CommentaireDate() {
        return $this->generic7CommentaireDate;
    }

    /**
     * Set the generic7 commentaire date.
     *
     * @param DateTime|null $generic7CommentaireDate The generic7 commentaire date.
     */
    public function setGeneric7CommentaireDate(DateTime $generic7CommentaireDate = null) {
        $this->generic7CommentaireDate = $generic7CommentaireDate;
        return $this;
    }
}
