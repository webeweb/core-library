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
 * Pre lib commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePreLibCommentaireDateTrait {

    /**
     * Pre lib commentaire date.
     *
     * @var DateTime|null
     */
    private $preLibCommentaireDate;

    /**
     * Get the pre lib commentaire date.
     *
     * @return DateTime|null Returns the pre lib commentaire date.
     */
    public function getPreLibCommentaireDate() {
        return $this->preLibCommentaireDate;
    }

    /**
     * Set the pre lib commentaire date.
     *
     * @param DateTime|null $preLibCommentaireDate The pre lib commentaire date.
     */
    public function setPreLibCommentaireDate(DateTime $preLibCommentaireDate = null) {
        $this->preLibCommentaireDate = $preLibCommentaireDate;
        return $this;
    }
}
