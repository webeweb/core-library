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
 * Cpte collectif cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCpteCollectifCliTrait {

    /**
     * Cpte collectif cli.
     *
     * @var string
     */
    private $cpteCollectifCli;

    /**
     * Get the cpte collectif cli.
     *
     * @return string Returns the cpte collectif cli.
     */
    public function getCpteCollectifCli() {
        return $this->cpteCollectifCli;
    }

    /**
     * Set the cpte collectif cli.
     *
     * @param string $cpteCollectifCli The cpte collectif cli.
     */
    public function setCpteCollectifCli($cpteCollectifCli) {
        $this->cpteCollectifCli = $cpteCollectifCli;
        return $this;
    }
}
