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
 * Dcr commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDcrCommentaireDateTrait {

    /**
     * Dcr commentaire date.
     *
     * @var DateTime|null
     */
    private $dcrCommentaireDate;

    /**
     * Get the dcr commentaire date.
     *
     * @return DateTime|null Returns the dcr commentaire date.
     */
    public function getDcrCommentaireDate() {
        return $this->dcrCommentaireDate;
    }

    /**
     * Set the dcr commentaire date.
     *
     * @param DateTime|null $dcrCommentaireDate The dcr commentaire date.
     */
    public function setDcrCommentaireDate(DateTime $dcrCommentaireDate = null) {
        $this->dcrCommentaireDate = $dcrCommentaireDate;
        return $this;
    }
}
