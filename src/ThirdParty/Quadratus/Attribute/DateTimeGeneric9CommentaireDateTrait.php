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
 * Generic9 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric9CommentaireDateTrait {

    /**
     * Generic9 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic9CommentaireDate;

    /**
     * Get the generic9 commentaire date.
     *
     * @return DateTime|null Returns the generic9 commentaire date.
     */
    public function getGeneric9CommentaireDate() {
        return $this->generic9CommentaireDate;
    }

    /**
     * Set the generic9 commentaire date.
     *
     * @param DateTime|null $generic9CommentaireDate The generic9 commentaire date.
     */
    public function setGeneric9CommentaireDate(DateTime $generic9CommentaireDate = null) {
        $this->generic9CommentaireDate = $generic9CommentaireDate;
        return $this;
    }
}
