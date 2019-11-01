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
 * Generic10 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric10CommentaireDateTrait {

    /**
     * Generic10 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic10CommentaireDate;

    /**
     * Get the generic10 commentaire date.
     *
     * @return DateTime|null Returns the generic10 commentaire date.
     */
    public function getGeneric10CommentaireDate() {
        return $this->generic10CommentaireDate;
    }

    /**
     * Set the generic10 commentaire date.
     *
     * @param DateTime|null $generic10CommentaireDate The generic10 commentaire date.
     */
    public function setGeneric10CommentaireDate(DateTime $generic10CommentaireDate = null) {
        $this->generic10CommentaireDate = $generic10CommentaireDate;
        return $this;
    }
}
