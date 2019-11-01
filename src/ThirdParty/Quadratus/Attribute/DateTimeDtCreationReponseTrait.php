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
 * Dt creation reponse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtCreationReponseTrait {

    /**
     * Dt creation reponse.
     *
     * @var DateTime|null
     */
    private $dtCreationReponse;

    /**
     * Get the dt creation reponse.
     *
     * @return DateTime|null Returns the dt creation reponse.
     */
    public function getDtCreationReponse() {
        return $this->dtCreationReponse;
    }

    /**
     * Set the dt creation reponse.
     *
     * @param DateTime|null $dtCreationReponse The dt creation reponse.
     */
    public function setDtCreationReponse(DateTime $dtCreationReponse = null) {
        $this->dtCreationReponse = $dtCreationReponse;
        return $this;
    }
}
