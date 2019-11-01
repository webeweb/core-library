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
 * Isr commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeIsrCommentaireDateTrait {

    /**
     * Isr commentaire date.
     *
     * @var DateTime|null
     */
    private $isrCommentaireDate;

    /**
     * Get the isr commentaire date.
     *
     * @return DateTime|null Returns the isr commentaire date.
     */
    public function getIsrCommentaireDate() {
        return $this->isrCommentaireDate;
    }

    /**
     * Set the isr commentaire date.
     *
     * @param DateTime|null $isrCommentaireDate The isr commentaire date.
     */
    public function setIsrCommentaireDate(DateTime $isrCommentaireDate = null) {
        $this->isrCommentaireDate = $isrCommentaireDate;
        return $this;
    }
}
