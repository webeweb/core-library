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
 * Bull commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeBullCommentaireDateTrait {

    /**
     * Bull commentaire date.
     *
     * @var DateTime|null
     */
    private $bullCommentaireDate;

    /**
     * Get the bull commentaire date.
     *
     * @return DateTime|null Returns the bull commentaire date.
     */
    public function getBullCommentaireDate() {
        return $this->bullCommentaireDate;
    }

    /**
     * Set the bull commentaire date.
     *
     * @param DateTime|null $bullCommentaireDate The bull commentaire date.
     */
    public function setBullCommentaireDate(DateTime $bullCommentaireDate = null) {
        $this->bullCommentaireDate = $bullCommentaireDate;
        return $this;
    }
}
