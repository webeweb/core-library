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
 * Date limite saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateLimiteSaisieTrait {

    /**
     * Date limite saisie.
     *
     * @var DateTime|null
     */
    private $dateLimiteSaisie;

    /**
     * Get the date limite saisie.
     *
     * @return DateTime|null Returns the date limite saisie.
     */
    public function getDateLimiteSaisie() {
        return $this->dateLimiteSaisie;
    }

    /**
     * Set the date limite saisie.
     *
     * @param DateTime|null $dateLimiteSaisie The date limite saisie.
     */
    public function setDateLimiteSaisie(DateTime $dateLimiteSaisie = null) {
        $this->dateLimiteSaisie = $dateLimiteSaisie;
        return $this;
    }
}
