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
 * Ne pas creer cpt cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePasCreerCptCliTrait {

    /**
     * Ne pas creer cpt cli.
     *
     * @var bool
     */
    private $nePasCreerCptCli;

    /**
     * Get the ne pas creer cpt cli.
     *
     * @return bool Returns the ne pas creer cpt cli.
     */
    public function getNePasCreerCptCli() {
        return $this->nePasCreerCptCli;
    }

    /**
     * Set the ne pas creer cpt cli.
     *
     * @param bool $nePasCreerCptCli The ne pas creer cpt cli.
     */
    public function setNePasCreerCptCli($nePasCreerCptCli) {
        $this->nePasCreerCptCli = $nePasCreerCptCli;
        return $this;
    }
}
