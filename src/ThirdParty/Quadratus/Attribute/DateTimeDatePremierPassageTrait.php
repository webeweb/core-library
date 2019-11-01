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
 * Date premier passage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePremierPassageTrait {

    /**
     * Date premier passage.
     *
     * @var DateTime|null
     */
    private $datePremierPassage;

    /**
     * Get the date premier passage.
     *
     * @return DateTime|null Returns the date premier passage.
     */
    public function getDatePremierPassage() {
        return $this->datePremierPassage;
    }

    /**
     * Set the date premier passage.
     *
     * @param DateTime|null $datePremierPassage The date premier passage.
     */
    public function setDatePremierPassage(DateTime $datePremierPassage = null) {
        $this->datePremierPassage = $datePremierPassage;
        return $this;
    }
}
