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
 * Plaf tp commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePlafTpCommentaireDateTrait {

    /**
     * Plaf tp commentaire date.
     *
     * @var DateTime|null
     */
    private $plafTpCommentaireDate;

    /**
     * Get the plaf tp commentaire date.
     *
     * @return DateTime|null Returns the plaf tp commentaire date.
     */
    public function getPlafTpCommentaireDate() {
        return $this->plafTpCommentaireDate;
    }

    /**
     * Set the plaf tp commentaire date.
     *
     * @param DateTime|null $plafTpCommentaireDate The plaf tp commentaire date.
     */
    public function setPlafTpCommentaireDate(DateTime $plafTpCommentaireDate = null) {
        $this->plafTpCommentaireDate = $plafTpCommentaireDate;
        return $this;
    }
}
