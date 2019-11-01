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
 * Ducs assedic commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDucsAssedicCommentaireDateTrait {

    /**
     * Ducs assedic commentaire date.
     *
     * @var DateTime|null
     */
    private $ducsAssedicCommentaireDate;

    /**
     * Get the ducs assedic commentaire date.
     *
     * @return DateTime|null Returns the ducs assedic commentaire date.
     */
    public function getDucsAssedicCommentaireDate() {
        return $this->ducsAssedicCommentaireDate;
    }

    /**
     * Set the ducs assedic commentaire date.
     *
     * @param DateTime|null $ducsAssedicCommentaireDate The ducs assedic commentaire date.
     */
    public function setDucsAssedicCommentaireDate(DateTime $ducsAssedicCommentaireDate = null) {
        $this->ducsAssedicCommentaireDate = $ducsAssedicCommentaireDate;
        return $this;
    }
}
