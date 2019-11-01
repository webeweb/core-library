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
 * Tsa commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTsaCommentaireDateTrait {

    /**
     * Tsa commentaire date.
     *
     * @var DateTime|null
     */
    private $tsaCommentaireDate;

    /**
     * Get the tsa commentaire date.
     *
     * @return DateTime|null Returns the tsa commentaire date.
     */
    public function getTsaCommentaireDate() {
        return $this->tsaCommentaireDate;
    }

    /**
     * Set the tsa commentaire date.
     *
     * @param DateTime|null $tsaCommentaireDate The tsa commentaire date.
     */
    public function setTsaCommentaireDate(DateTime $tsaCommentaireDate = null) {
        $this->tsaCommentaireDate = $tsaCommentaireDate;
        return $this;
    }
}
