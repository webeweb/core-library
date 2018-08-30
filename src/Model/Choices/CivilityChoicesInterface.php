<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Choices;

/**
 * Civility choices interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Choices
 */
interface CivilityChoicesInterface {

    /**
     * Civility "Empty".
     *
     * @var integer
     */
    const CIVILITY_EMPTY = -1;

    /**
     * Civility "Miss".
     *
     * @var integer
     */
    const CIVILITY_MISS = 60;

    /**
     * Civility "Mister".
     *
     * @var integer
     */
    const CIVILITY_MISTER = 84;

    /**
     * Civility "Mrs".
     *
     * @var integer
     */
    const CIVILITY_MRS = 50;

}
