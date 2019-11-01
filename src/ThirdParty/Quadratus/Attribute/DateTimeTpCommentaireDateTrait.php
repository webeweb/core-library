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
 * Tp commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTpCommentaireDateTrait {

    /**
     * Tp commentaire date.
     *
     * @var DateTime|null
     */
    private $tpCommentaireDate;

    /**
     * Get the tp commentaire date.
     *
     * @return DateTime|null Returns the tp commentaire date.
     */
    public function getTpCommentaireDate() {
        return $this->tpCommentaireDate;
    }

    /**
     * Set the tp commentaire date.
     *
     * @param DateTime|null $tpCommentaireDate The tp commentaire date.
     */
    public function setTpCommentaireDate(DateTime $tpCommentaireDate = null) {
        $this->tpCommentaireDate = $tpCommentaireDate;
        return $this;
    }
}
