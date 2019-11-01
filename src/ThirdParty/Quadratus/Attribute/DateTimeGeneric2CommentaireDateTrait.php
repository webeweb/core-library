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
 * Generic2 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric2CommentaireDateTrait {

    /**
     * Generic2 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic2CommentaireDate;

    /**
     * Get the generic2 commentaire date.
     *
     * @return DateTime|null Returns the generic2 commentaire date.
     */
    public function getGeneric2CommentaireDate() {
        return $this->generic2CommentaireDate;
    }

    /**
     * Set the generic2 commentaire date.
     *
     * @param DateTime|null $generic2CommentaireDate The generic2 commentaire date.
     */
    public function setGeneric2CommentaireDate(DateTime $generic2CommentaireDate = null) {
        $this->generic2CommentaireDate = $generic2CommentaireDate;
        return $this;
    }
}
