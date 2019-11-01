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
 * Dt modif reponse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtModifReponseTrait {

    /**
     * Dt modif reponse.
     *
     * @var DateTime|null
     */
    private $dtModifReponse;

    /**
     * Get the dt modif reponse.
     *
     * @return DateTime|null Returns the dt modif reponse.
     */
    public function getDtModifReponse() {
        return $this->dtModifReponse;
    }

    /**
     * Set the dt modif reponse.
     *
     * @param DateTime|null $dtModifReponse The dt modif reponse.
     */
    public function setDtModifReponse(DateTime $dtModifReponse = null) {
        $this->dtModifReponse = $dtModifReponse;
        return $this;
    }
}
