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
 * Periode saisie deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeSaisieDebTrait {

    /**
     * Periode saisie deb.
     *
     * @var DateTime|null
     */
    private $periodeSaisieDeb;

    /**
     * Get the periode saisie deb.
     *
     * @return DateTime|null Returns the periode saisie deb.
     */
    public function getPeriodeSaisieDeb() {
        return $this->periodeSaisieDeb;
    }

    /**
     * Set the periode saisie deb.
     *
     * @param DateTime|null $periodeSaisieDeb The periode saisie deb.
     */
    public function setPeriodeSaisieDeb(DateTime $periodeSaisieDeb = null) {
        $this->periodeSaisieDeb = $periodeSaisieDeb;
        return $this;
    }
}
