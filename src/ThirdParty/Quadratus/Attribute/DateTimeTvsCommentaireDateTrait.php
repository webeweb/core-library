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
 * Tvs commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTvsCommentaireDateTrait {

    /**
     * Tvs commentaire date.
     *
     * @var DateTime|null
     */
    private $tvsCommentaireDate;

    /**
     * Get the tvs commentaire date.
     *
     * @return DateTime|null Returns the tvs commentaire date.
     */
    public function getTvsCommentaireDate() {
        return $this->tvsCommentaireDate;
    }

    /**
     * Set the tvs commentaire date.
     *
     * @param DateTime|null $tvsCommentaireDate The tvs commentaire date.
     */
    public function setTvsCommentaireDate(DateTime $tvsCommentaireDate = null) {
        $this->tvsCommentaireDate = $tvsCommentaireDate;
        return $this;
    }
}
