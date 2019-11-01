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
 * Ducs urssaf commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDucsUrssafCommentaireDateTrait {

    /**
     * Ducs urssaf commentaire date.
     *
     * @var DateTime|null
     */
    private $ducsUrssafCommentaireDate;

    /**
     * Get the ducs urssaf commentaire date.
     *
     * @return DateTime|null Returns the ducs urssaf commentaire date.
     */
    public function getDucsUrssafCommentaireDate() {
        return $this->ducsUrssafCommentaireDate;
    }

    /**
     * Set the ducs urssaf commentaire date.
     *
     * @param DateTime|null $ducsUrssafCommentaireDate The ducs urssaf commentaire date.
     */
    public function setDucsUrssafCommentaireDate(DateTime $ducsUrssafCommentaireDate = null) {
        $this->ducsUrssafCommentaireDate = $ducsUrssafCommentaireDate;
        return $this;
    }
}
