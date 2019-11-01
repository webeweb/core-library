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
 * Code ventil client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVentilClientTrait {

    /**
     * Code ventil client.
     *
     * @var string
     */
    private $codeVentilClient;

    /**
     * Get the code ventil client.
     *
     * @return string Returns the code ventil client.
     */
    public function getCodeVentilClient() {
        return $this->codeVentilClient;
    }

    /**
     * Set the code ventil client.
     *
     * @param string $codeVentilClient The code ventil client.
     */
    public function setCodeVentilClient($codeVentilClient) {
        $this->codeVentilClient = $codeVentilClient;
        return $this;
    }
}
