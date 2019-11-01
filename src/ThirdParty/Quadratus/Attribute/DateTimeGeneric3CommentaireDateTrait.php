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
 * Generic3 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric3CommentaireDateTrait {

    /**
     * Generic3 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic3CommentaireDate;

    /**
     * Get the generic3 commentaire date.
     *
     * @return DateTime|null Returns the generic3 commentaire date.
     */
    public function getGeneric3CommentaireDate() {
        return $this->generic3CommentaireDate;
    }

    /**
     * Set the generic3 commentaire date.
     *
     * @param DateTime|null $generic3CommentaireDate The generic3 commentaire date.
     */
    public function setGeneric3CommentaireDate(DateTime $generic3CommentaireDate = null) {
        $this->generic3CommentaireDate = $generic3CommentaireDate;
        return $this;
    }
}
