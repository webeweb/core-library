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
 * Tva commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTvaCommentaireDateTrait {

    /**
     * Tva commentaire date.
     *
     * @var DateTime|null
     */
    private $tvaCommentaireDate;

    /**
     * Get the tva commentaire date.
     *
     * @return DateTime|null Returns the tva commentaire date.
     */
    public function getTvaCommentaireDate() {
        return $this->tvaCommentaireDate;
    }

    /**
     * Set the tva commentaire date.
     *
     * @param DateTime|null $tvaCommentaireDate The tva commentaire date.
     */
    public function setTvaCommentaireDate(DateTime $tvaCommentaireDate = null) {
        $this->tvaCommentaireDate = $tvaCommentaireDate;
        return $this;
    }
}
