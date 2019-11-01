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
 * Das2 commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDas2CommentaireDateTrait {

    /**
     * Das2 commentaire date.
     *
     * @var DateTime|null
     */
    private $das2CommentaireDate;

    /**
     * Get the das2 commentaire date.
     *
     * @return DateTime|null Returns the das2 commentaire date.
     */
    public function getDas2CommentaireDate() {
        return $this->das2CommentaireDate;
    }

    /**
     * Set the das2 commentaire date.
     *
     * @param DateTime|null $das2CommentaireDate The das2 commentaire date.
     */
    public function setDas2CommentaireDate(DateTime $das2CommentaireDate = null) {
        $this->das2CommentaireDate = $das2CommentaireDate;
        return $this;
    }
}
