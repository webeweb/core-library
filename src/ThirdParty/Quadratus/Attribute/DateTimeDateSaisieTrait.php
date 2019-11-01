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
 * Date saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSaisieTrait {

    /**
     * Date saisie.
     *
     * @var DateTime|null
     */
    private $dateSaisie;

    /**
     * Get the date saisie.
     *
     * @return DateTime|null Returns the date saisie.
     */
    public function getDateSaisie() {
        return $this->dateSaisie;
    }

    /**
     * Set the date saisie.
     *
     * @param DateTime|null $dateSaisie The date saisie.
     */
    public function setDateSaisie(DateTime $dateSaisie = null) {
        $this->dateSaisie = $dateSaisie;
        return $this;
    }
}
