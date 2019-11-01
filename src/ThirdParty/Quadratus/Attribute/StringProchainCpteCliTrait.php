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
 * Prochain cpte cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProchainCpteCliTrait {

    /**
     * Prochain cpte cli.
     *
     * @var string
     */
    private $prochainCpteCli;

    /**
     * Get the prochain cpte cli.
     *
     * @return string Returns the prochain cpte cli.
     */
    public function getProchainCpteCli() {
        return $this->prochainCpteCli;
    }

    /**
     * Set the prochain cpte cli.
     *
     * @param string $prochainCpteCli The prochain cpte cli.
     */
    public function setProchainCpteCli($prochainCpteCli) {
        $this->prochainCpteCli = $prochainCpteCli;
        return $this;
    }
}
