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
 * Autre signature dnae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutreSignatureDnaeTrait {

    /**
     * Autre signature dnae.
     *
     * @var string
     */
    private $autreSignatureDnae;

    /**
     * Get the autre signature dnae.
     *
     * @return string Returns the autre signature dnae.
     */
    public function getAutreSignatureDnae() {
        return $this->autreSignatureDnae;
    }

    /**
     * Set the autre signature dnae.
     *
     * @param string $autreSignatureDnae The autre signature dnae.
     */
    public function setAutreSignatureDnae($autreSignatureDnae) {
        $this->autreSignatureDnae = $autreSignatureDnae;
        return $this;
    }
}
