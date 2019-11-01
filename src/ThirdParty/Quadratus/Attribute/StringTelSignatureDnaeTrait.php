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
 * Tel signature dnae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelSignatureDnaeTrait {

    /**
     * Tel signature dnae.
     *
     * @var string
     */
    private $telSignatureDnae;

    /**
     * Get the tel signature dnae.
     *
     * @return string Returns the tel signature dnae.
     */
    public function getTelSignatureDnae() {
        return $this->telSignatureDnae;
    }

    /**
     * Set the tel signature dnae.
     *
     * @param string $telSignatureDnae The tel signature dnae.
     */
    public function setTelSignatureDnae($telSignatureDnae) {
        $this->telSignatureDnae = $telSignatureDnae;
        return $this;
    }
}
