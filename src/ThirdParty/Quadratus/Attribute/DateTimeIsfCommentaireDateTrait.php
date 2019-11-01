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
 * Isf commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeIsfCommentaireDateTrait {

    /**
     * Isf commentaire date.
     *
     * @var DateTime|null
     */
    private $isfCommentaireDate;

    /**
     * Get the isf commentaire date.
     *
     * @return DateTime|null Returns the isf commentaire date.
     */
    public function getIsfCommentaireDate() {
        return $this->isfCommentaireDate;
    }

    /**
     * Set the isf commentaire date.
     *
     * @param DateTime|null $isfCommentaireDate The isf commentaire date.
     */
    public function setIsfCommentaireDate(DateTime $isfCommentaireDate = null) {
        $this->isfCommentaireDate = $isfCommentaireDate;
        return $this;
    }
}
