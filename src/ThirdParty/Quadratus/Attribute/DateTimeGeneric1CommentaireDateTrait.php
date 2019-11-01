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
 * Generic1 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric1CommentaireDateTrait {

    /**
     * Generic1 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic1CommentaireDate;

    /**
     * Get the generic1 commentaire date.
     *
     * @return DateTime|null Returns the generic1 commentaire date.
     */
    public function getGeneric1CommentaireDate() {
        return $this->generic1CommentaireDate;
    }

    /**
     * Set the generic1 commentaire date.
     *
     * @param DateTime|null $generic1CommentaireDate The generic1 commentaire date.
     */
    public function setGeneric1CommentaireDate(DateTime $generic1CommentaireDate = null) {
        $this->generic1CommentaireDate = $generic1CommentaireDate;
        return $this;
    }
}
