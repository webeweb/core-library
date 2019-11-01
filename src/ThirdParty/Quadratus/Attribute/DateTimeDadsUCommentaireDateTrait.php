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
 * Dads u commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDadsUCommentaireDateTrait {

    /**
     * Dads u commentaire date.
     *
     * @var DateTime|null
     */
    private $dadsUCommentaireDate;

    /**
     * Get the dads u commentaire date.
     *
     * @return DateTime|null Returns the dads u commentaire date.
     */
    public function getDadsUCommentaireDate() {
        return $this->dadsUCommentaireDate;
    }

    /**
     * Set the dads u commentaire date.
     *
     * @param DateTime|null $dadsUCommentaireDate The dads u commentaire date.
     */
    public function setDadsUCommentaireDate(DateTime $dadsUCommentaireDate = null) {
        $this->dadsUCommentaireDate = $dadsUCommentaireDate;
        return $this;
    }
}
