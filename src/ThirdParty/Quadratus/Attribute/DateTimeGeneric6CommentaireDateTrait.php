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
 * Generic6 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric6CommentaireDateTrait {

    /**
     * Generic6 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic6CommentaireDate;

    /**
     * Get the generic6 commentaire date.
     *
     * @return DateTime|null Returns the generic6 commentaire date.
     */
    public function getGeneric6CommentaireDate() {
        return $this->generic6CommentaireDate;
    }

    /**
     * Set the generic6 commentaire date.
     *
     * @param DateTime|null $generic6CommentaireDate The generic6 commentaire date.
     */
    public function setGeneric6CommentaireDate(DateTime $generic6CommentaireDate = null) {
        $this->generic6CommentaireDate = $generic6CommentaireDate;
        return $this;
    }
}
