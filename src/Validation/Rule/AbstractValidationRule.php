<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validation\Rule;

use WBW\Library\Core\Validation\API\ValidationRuleInterface;

/**
 * Abstract validation rule.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validation\Rule
 * @abstract
 */
abstract class AbstractValidationRule implements ValidationRuleInterface {

    /**
     * Name.
     *
     * @var string
     */
    private $name;

    /**
     * Constructor.
     *
     * @param string $name The name.
     */
    protected function __construct($name) {
        $this->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set the name.
     *
     * @param string $name The name.
     * @return ValidationRuleInterface Returns this validation rule.
     */
    protected function setName($name) {
        $this->name = $name;
    }
}
