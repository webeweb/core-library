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
 * Iss commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeIssCommentaireDateTrait {

    /**
     * Iss commentaire date.
     *
     * @var DateTime|null
     */
    private $issCommentaireDate;

    /**
     * Get the iss commentaire date.
     *
     * @return DateTime|null Returns the iss commentaire date.
     */
    public function getIssCommentaireDate() {
        return $this->issCommentaireDate;
    }

    /**
     * Set the iss commentaire date.
     *
     * @param DateTime|null $issCommentaireDate The iss commentaire date.
     */
    public function setIssCommentaireDate(DateTime $issCommentaireDate = null) {
        $this->issCommentaireDate = $issCommentaireDate;
        return $this;
    }
}
