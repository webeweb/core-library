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
 * Blocage ed cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBlocageEdCliTrait {

    /**
     * Blocage ed cli.
     *
     * @var bool
     */
    private $blocageEdCli;

    /**
     * Get the blocage ed cli.
     *
     * @return bool Returns the blocage ed cli.
     */
    public function getBlocageEdCli() {
        return $this->blocageEdCli;
    }

    /**
     * Set the blocage ed cli.
     *
     * @param bool $blocageEdCli The blocage ed cli.
     */
    public function setBlocageEdCli($blocageEdCli) {
        $this->blocageEdCli = $blocageEdCli;
        return $this;
    }
}
