<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use WBW\Library\Security\Authenticator;
use WBW\Library\Security\PasswordAuthentication;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * Authenticator.
     *
     * @var Authenticator
     */
    protected $authenticator;

    /**
     * Logger.
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Password authentication.
     *
     * @var PasswordAuthentication
     */
    protected $passwordAuthentication;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Logger mock.
        $this->logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        // Set a Password authentication mock.
        $this->passwordAuthentication = new PasswordAuthentication("demo", "password");

        // Set an Authenticator mock.
        $this->authenticator = new Authenticator("hostname", $this->passwordAuthentication);
        $this->authenticator->setPort(null);
    }
}
