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
 * Generic4 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric4CommentaireDateTrait {

    /**
     * Generic4 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic4CommentaireDate;

    /**
     * Get the generic4 commentaire date.
     *
     * @return DateTime|null Returns the generic4 commentaire date.
     */
    public function getGeneric4CommentaireDate() {
        return $this->generic4CommentaireDate;
    }

    /**
     * Set the generic4 commentaire date.
     *
     * @param DateTime|null $generic4CommentaireDate The generic4 commentaire date.
     */
    public function setGeneric4CommentaireDate(DateTime $generic4CommentaireDate = null) {
        $this->generic4CommentaireDate = $generic4CommentaireDate;
        return $this;
    }
}
