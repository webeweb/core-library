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
 * Puissance cv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPuissanceCvTrait {

    /**
     * Puissance cv.
     *
     * @var int
     */
    private $puissanceCv;

    /**
     * Get the puissance cv.
     *
     * @return int Returns the puissance cv.
     */
    public function getPuissanceCv() {
        return $this->puissanceCv;
    }

    /**
     * Set the puissance cv.
     *
     * @param int $puissanceCv The puissance cv.
     */
    public function setPuissanceCv($puissanceCv) {
        $this->puissanceCv = $puissanceCv;
        return $this;
    }
}
