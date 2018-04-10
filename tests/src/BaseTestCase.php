<?php
namespace WPDT\Tests;

use WP_Mock\Tools\TestCase;
/**
 * Class TestCase
 *
 * @package Tests
 */
class BaseTestCase extends TestCase
{
    /**
     * Setup Brain Monkey tests
     *
     * @return null
     */
    public function setUp()
    {
        parent::setUp();
        \WP_Mock::setUp();
    }

    /**
     * Tear Down Brain Monkey tests
     *
     * @return null
     */
    public function tearDown()
    {
        \WP_Mock::tearDown();
        parent::tearDown();
    }
}