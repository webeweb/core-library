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

/**
 * Tel pers a prevenir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelPersAPrevenirTrait {

    /**
     * Tel pers a prevenir.
     *
     * @var string
     */
    private $telPersAPrevenir;

    /**
     * Get the tel pers a prevenir.
     *
     * @return string Returns the tel pers a prevenir.
     */
    public function getTelPersAPrevenir() {
        return $this->telPersAPrevenir;
    }

    /**
     * Set the tel pers a prevenir.
     *
     * @param string $telPersAPrevenir The tel pers a prevenir.
     */
    public function setTelPersAPrevenir($telPersAPrevenir) {
        $this->telPersAPrevenir = $telPersAPrevenir;
        return $this;
    }
}
