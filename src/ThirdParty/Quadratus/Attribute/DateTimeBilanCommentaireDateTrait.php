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
 * Bilan commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeBilanCommentaireDateTrait {

    /**
     * Bilan commentaire date.
     *
     * @var DateTime|null
     */
    private $bilanCommentaireDate;

    /**
     * Get the bilan commentaire date.
     *
     * @return DateTime|null Returns the bilan commentaire date.
     */
    public function getBilanCommentaireDate() {
        return $this->bilanCommentaireDate;
    }

    /**
     * Set the bilan commentaire date.
     *
     * @param DateTime|null $bilanCommentaireDate The bilan commentaire date.
     */
    public function setBilanCommentaireDate(DateTime $bilanCommentaireDate = null) {
        $this->bilanCommentaireDate = $bilanCommentaireDate;
        return $this;
    }
}
