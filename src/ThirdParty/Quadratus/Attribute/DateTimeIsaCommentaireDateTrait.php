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
 * Isa commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeIsaCommentaireDateTrait {

    /**
     * Isa commentaire date.
     *
     * @var DateTime|null
     */
    private $isaCommentaireDate;

    /**
     * Get the isa commentaire date.
     *
     * @return DateTime|null Returns the isa commentaire date.
     */
    public function getIsaCommentaireDate() {
        return $this->isaCommentaireDate;
    }

    /**
     * Set the isa commentaire date.
     *
     * @param DateTime|null $isaCommentaireDate The isa commentaire date.
     */
    public function setIsaCommentaireDate(DateTime $isaCommentaireDate = null) {
        $this->isaCommentaireDate = $isaCommentaireDate;
        return $this;
    }
}
