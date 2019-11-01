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
 * Impot revenu commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeImpotRevenuCommentaireDateTrait {

    /**
     * Impot revenu commentaire date.
     *
     * @var DateTime|null
     */
    private $impotRevenuCommentaireDate;

    /**
     * Get the impot revenu commentaire date.
     *
     * @return DateTime|null Returns the impot revenu commentaire date.
     */
    public function getImpotRevenuCommentaireDate() {
        return $this->impotRevenuCommentaireDate;
    }

    /**
     * Set the impot revenu commentaire date.
     *
     * @param DateTime|null $impotRevenuCommentaireDate The impot revenu commentaire date.
     */
    public function setImpotRevenuCommentaireDate(DateTime $impotRevenuCommentaireDate = null) {
        $this->impotRevenuCommentaireDate = $impotRevenuCommentaireDate;
        return $this;
    }
}
