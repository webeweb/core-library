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
 * Date liaison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateLiaisonTrait {

    /**
     * Date liaison.
     *
     * @var DateTime|null
     */
    private $dateLiaison;

    /**
     * Get the date liaison.
     *
     * @return DateTime|null Returns the date liaison.
     */
    public function getDateLiaison() {
        return $this->dateLiaison;
    }

    /**
     * Set the date liaison.
     *
     * @param DateTime|null $dateLiaison The date liaison.
     */
    public function setDateLiaison(DateTime $dateLiaison = null) {
        $this->dateLiaison = $dateLiaison;
        return $this;
    }
}
