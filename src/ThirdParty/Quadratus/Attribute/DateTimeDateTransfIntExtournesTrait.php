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
 * Date transf int extournes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfIntExtournesTrait {

    /**
     * Date transf int extournes.
     *
     * @var DateTime|null
     */
    private $dateTransfIntExtournes;

    /**
     * Get the date transf int extournes.
     *
     * @return DateTime|null Returns the date transf int extournes.
     */
    public function getDateTransfIntExtournes() {
        return $this->dateTransfIntExtournes;
    }

    /**
     * Set the date transf int extournes.
     *
     * @param DateTime|null $dateTransfIntExtournes The date transf int extournes.
     */
    public function setDateTransfIntExtournes(DateTime $dateTransfIntExtournes = null) {
        $this->dateTransfIntExtournes = $dateTransfIntExtournes;
        return $this;
    }
}
