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
 * Dsi commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDsiCommentaireDateTrait {

    /**
     * Dsi commentaire date.
     *
     * @var DateTime|null
     */
    private $dsiCommentaireDate;

    /**
     * Get the dsi commentaire date.
     *
     * @return DateTime|null Returns the dsi commentaire date.
     */
    public function getDsiCommentaireDate() {
        return $this->dsiCommentaireDate;
    }

    /**
     * Set the dsi commentaire date.
     *
     * @param DateTime|null $dsiCommentaireDate The dsi commentaire date.
     */
    public function setDsiCommentaireDate(DateTime $dsiCommentaireDate = null) {
        $this->dsiCommentaireDate = $dsiCommentaireDate;
        return $this;
    }
}
