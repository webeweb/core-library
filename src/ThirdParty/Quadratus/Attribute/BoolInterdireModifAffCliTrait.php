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
 * Interdire modif aff cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireModifAffCliTrait {

    /**
     * Interdire modif aff cli.
     *
     * @var bool
     */
    private $interdireModifAffCli;

    /**
     * Get the interdire modif aff cli.
     *
     * @return bool Returns the interdire modif aff cli.
     */
    public function getInterdireModifAffCli() {
        return $this->interdireModifAffCli;
    }

    /**
     * Set the interdire modif aff cli.
     *
     * @param bool $interdireModifAffCli The interdire modif aff cli.
     */
    public function setInterdireModifAffCli($interdireModifAffCli) {
        $this->interdireModifAffCli = $interdireModifAffCli;
        return $this;
    }
}
