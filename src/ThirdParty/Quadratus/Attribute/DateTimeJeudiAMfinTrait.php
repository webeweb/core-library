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
 * Jeudi a mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeJeudiAMfinTrait {

    /**
     * Jeudi a mfin.
     *
     * @var DateTime|null
     */
    private $jeudiAMfin;

    /**
     * Get the jeudi a mfin.
     *
     * @return DateTime|null Returns the jeudi a mfin.
     */
    public function getJeudiAMfin() {
        return $this->jeudiAMfin;
    }

    /**
     * Set the jeudi a mfin.
     *
     * @param DateTime|null $jeudiAMfin The jeudi a mfin.
     */
    public function setJeudiAMfin(DateTime $jeudiAMfin = null) {
        $this->jeudiAMfin = $jeudiAMfin;
        return $this;
    }
}
