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
 * Situation commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSituationCommentaireDateTrait {

    /**
     * Situation commentaire date.
     *
     * @var DateTime|null
     */
    private $situationCommentaireDate;

    /**
     * Get the situation commentaire date.
     *
     * @return DateTime|null Returns the situation commentaire date.
     */
    public function getSituationCommentaireDate() {
        return $this->situationCommentaireDate;
    }

    /**
     * Set the situation commentaire date.
     *
     * @param DateTime|null $situationCommentaireDate The situation commentaire date.
     */
    public function setSituationCommentaireDate(DateTime $situationCommentaireDate = null) {
        $this->situationCommentaireDate = $situationCommentaireDate;
        return $this;
    }
}
