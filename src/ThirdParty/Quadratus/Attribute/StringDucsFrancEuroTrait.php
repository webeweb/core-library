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
 * Ducs franc euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDucsFrancEuroTrait {

    /**
     * Ducs franc euro.
     *
     * @var string
     */
    private $ducsFrancEuro;

    /**
     * Get the ducs franc euro.
     *
     * @return string Returns the ducs franc euro.
     */
    public function getDucsFrancEuro() {
        return $this->ducsFrancEuro;
    }

    /**
     * Set the ducs franc euro.
     *
     * @param string $ducsFrancEuro The ducs franc euro.
     */
    public function setDucsFrancEuro($ducsFrancEuro) {
        $this->ducsFrancEuro = $ducsFrancEuro;
        return $this;
    }
}
