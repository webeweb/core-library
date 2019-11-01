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
 * Fin periode histo das trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinPeriodeHistoDasTrait {

    /**
     * Fin periode histo das.
     *
     * @var DateTime|null
     */
    private $finPeriodeHistoDas;

    /**
     * Get the fin periode histo das.
     *
     * @return DateTime|null Returns the fin periode histo das.
     */
    public function getFinPeriodeHistoDas() {
        return $this->finPeriodeHistoDas;
    }

    /**
     * Set the fin periode histo das.
     *
     * @param DateTime|null $finPeriodeHistoDas The fin periode histo das.
     */
    public function setFinPeriodeHistoDas(DateTime $finPeriodeHistoDas = null) {
        $this->finPeriodeHistoDas = $finPeriodeHistoDas;
        return $this;
    }
}
