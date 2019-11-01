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
 * Generic8 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric8CommentaireDateTrait {

    /**
     * Generic8 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic8CommentaireDate;

    /**
     * Get the generic8 commentaire date.
     *
     * @return DateTime|null Returns the generic8 commentaire date.
     */
    public function getGeneric8CommentaireDate() {
        return $this->generic8CommentaireDate;
    }

    /**
     * Set the generic8 commentaire date.
     *
     * @param DateTime|null $generic8CommentaireDate The generic8 commentaire date.
     */
    public function setGeneric8CommentaireDate(DateTime $generic8CommentaireDate = null) {
        $this->generic8CommentaireDate = $generic8CommentaireDate;
        return $this;
    }
}
