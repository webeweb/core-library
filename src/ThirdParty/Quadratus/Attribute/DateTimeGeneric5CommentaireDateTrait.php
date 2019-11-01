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
 * Generic5 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric5CommentaireDateTrait {

    /**
     * Generic5 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic5CommentaireDate;

    /**
     * Get the generic5 commentaire date.
     *
     * @return DateTime|null Returns the generic5 commentaire date.
     */
    public function getGeneric5CommentaireDate() {
        return $this->generic5CommentaireDate;
    }

    /**
     * Set the generic5 commentaire date.
     *
     * @param DateTime|null $generic5CommentaireDate The generic5 commentaire date.
     */
    public function setGeneric5CommentaireDate(DateTime $generic5CommentaireDate = null) {
        $this->generic5CommentaireDate = $generic5CommentaireDate;
        return $this;
    }
}
